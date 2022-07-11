<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Payment;
use Livewire\Component;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Receipt as ModelsReceipt;
use Livewire\WithPagination;

class Receipt extends Component
{
    public $name, $email, $phone, $payment_method, $course, $amount, $faculty;
    public $activeFaculty = 1;
    public $search, $perPage = 10;

    public $update = false;
    public $form = false;
    use WithPagination;

    protected $listeners = [
        'deleteConfirm' => 'delete',
        'deleteMutipleConfirm' => 'buckDelete'
    ];

    public function setFaculty($id)
    {
        // dd($this->faculty);
        $this->activeFaculty = $id;
    }

    function add()
    {
        $this->update = false;
    }
    function refreshInputs()
    {
        $this->name = '';
        $this->phone = '';
        $this->name = '';
    }

    public function save()
    {
        $data = $this->validate(
            [
                'name' => 'required',
                'course' => 'required',
                'faculty' => 'required',
                'payment_method' => 'required',
                'amount' => 'required|integer|numeric:12',
                'phone' => 'required|digits_between:10,11',
                'email' => 'required|email|unique:payments',

            ]
        );

        $saved = Payment::create($data);


        if ($saved) {
            $this->refreshInputs();
            $this->update = false;
            $this->form = false;
            $this->dispatchBrowserEvent('closeModal');
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'Payment made successfully',
                'title' => 'Payment Added',
                'timer' => 3000,
            ]);
        }
    }

    public function confirmDelete($id)
    {

        $staff = Payment::findOrFail($id);

        $this->delete = $id;

        $this->dispatchBrowserEvent('swal:confirm');
    }
    // public function edit($id)
    // {

    //     $staff = Payment::findOrFail($id);

    //     $this->cid = $staff->id;
    //     $this->role = $staff->role;
    //     $this->name = $staff->name;
    //     $this->dob = $staff->dob;
    //     $this->phone =  $staff->phone;
    //     $this->email =  $staff->email;
    //     $this->dispatchBrowserEvent('showModal');
    // }

    function update()
    {

        $cid = $this->cid;
        $staff = $this->validate(
            [
                'role' => 'required',
                'name' => 'required',
                'dob' => ['required', 'date', 'before:' . Carbon::now()->subYears(18)->format('Y-m-d')],
                'date_employed' => 'required|date|before_or_equal:today',
                'birth' => 'required',
                'nationality' => 'required',
                'sor' => 'required',
                'lga' => 'required',
                'address' => 'required|min:7',
                'religion' => 'required',
                'card_no' => 'required',
                'id_card' => 'required',
                'phone' => 'required|digits:10',
                'email' => 'required|email',
                'salary' => 'required|integer',
                'nok_phone' => 'required|digits:10',
                'nok_name' => 'required',
                'nok_address' => 'required|min:7',
            ]
        );
        $true = Payment::find($cid)->update($staff);

        $this->update = false;
        $this->refreshInputs();
        $this->dispatchBrowserEvent('closeModal');

        if ($true) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'Staff Updated Successfully',
                'title' => 'Updated',
                'timer' => 3000,
            ]);
        }
    }

    public function delete()
    {

        $staff = Payment::findOrFail($this->delete);

        $true = $staff->delete();

        if ($true) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => $staff->name . ' has deleted Successfully from ' . strtoupper($this->branch->state) . ' branch',
                'title' => 'Deleted',
                'timer' => 3000,
            ]);
        }
        $this->update = false;
    }

    public function render()
    {
        $faculties = Faculty::all();
        $courses = Department::with('faculty')->where('faculty_id', $this->activeFaculty)->get();
        $search = '%' . $this->search . '%';
        $payments = Payment::where('receipt_id', 'LIKE', $search)->orWhere('name', 'LIKE', $search)->paginate($this->perPage);
        return view('livewire.receipt', compact('payments', 'faculties', 'courses'));
    }
}