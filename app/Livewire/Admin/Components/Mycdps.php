<?php

namespace App\Livewire\Admin\Components;

use App\Interfaces\iapplicationsessionInterface;
use App\Interfaces\ImycdpInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mary\Traits\Toast;

class Mycdps extends Component
{
    use Toast,WithFileUploads;
    public $customerprofession_id;
    public $sessions;
    public $year;
    protected $mycdprepo;
    public $cdps;
    public $mycdp= null;
    public $modal = false;
    public $addmodal = false;

    public $title;
    public $description;
    public $type;
    public $duration;
    public $durationunit;
    public $id;
    public $file;
    public $attachmentmodal = false;

    public function mount($customerprofession_id,$sessions){
        $this->customerprofession_id = $customerprofession_id;
        $this->sessions = $sessions;
        $this->year = date('Y');
        $this->cdps = new Collection();
    }
    public function boot(ImycdpInterface $mcdprepo){
        $this->mycdprepo = $mcdprepo;
    }
    public function getdata(){
        $this->cdps = $this->mycdprepo->getbycustomerprofession($this->customerprofession_id,$this->year);
    }
    public function getcdps(){
        $this->getdata();
        $this->modal = true;
    }
    public function save(){
        $this->validate([
            'title'=>'required',
            'description'=>'required',
            'type'=>'required',
            'duration'=>'required',
            'durationunit'=>'required',
        ]);
        if($this->id){
            $this->update();
        }else{
            $this->create();
        }

        $this->reset("title","description","type","duration","durationunit");
        $this->addmodal = false;
    }

    public function create(){
        $respomse = $this->mycdprepo->create([
            'title'=>$this->title,
            'description'=>$this->description,
            'type'=>$this->type,
            'duration'=>$this->duration,
            'durationunit'=>$this->durationunit,
            'customerprofession_id'=>$this->customerprofession_id,
            'year'=>$this->year,
            'user_id'=>Auth::user()->id,
        ]);
        if($respomse['status']=='success'){
            $this->success($respomse['message']);
            $this->getdata();
        }else{
            $this->error($respomse['message']);
        }
        
    }

    public function update(){
        $respomse = $this->mycdprepo->update($this->id, [
            'title'=>$this->title,
            'description'=>$this->description,
            'type'=>$this->type,
            'duration'=>$this->duration,
            'durationunit'=>$this->durationunit,
            'customerprofession_id'=>$this->customerprofession_id,
            'year'=>$this->year,
            'user_id'=>Auth::user()->id,
        ]);
        if($respomse['status']=='success'){
            $this->success($respomse['message']);
            $this->getdata();
        }else{
            $this->error($respomse['message']);
        }

    }
    public function delete($id){
        $respomse = $this->mycdprepo->delete($id);
        if($respomse['status']=='success'){
            $this->success($respomse['message']);
        }else{
            $this->error($respomse['message']);
        }
    }

    public function edit($id){
        $this->id = $id;
        $payload = $this->mycdprepo->get($this->id);
        $this->title = $payload->title;
        $this->description = $payload->description;
        $this->type = $payload->type;
        $this->duration = $payload->duration;
        $this->durationunit = $payload->durationunit;
        $this->addmodal = true;
    }
    public function openattachmentmodal($id){
        $this->id = $id;
        $this->mycdp = $this->mycdprepo->get($this->id);
        $this->attachmentmodal = true;
    }
    public function saveattachment(){
        $this->validate([
            'type'=>'required',
            'file'=>'required',
        ]);
        $file = $this->file->store('mycdp');
        $respomse = $this->mycdprepo->saveattachment([
            'type'=>$this->type,
            'file'=>$file,
            'mycdp_id'=>$this->id,
        ]);
        if($respomse['status']=='success'){
            $this->success($respomse['message']);
            $this->mycdp = $this->mycdprepo->get($this->id);
            
        }else{
            $this->error($respomse['message']);
        }
    }
    public function deleteattachment($id){
        $respomse = $this->mycdprepo->deleteattachment($id);
        if($respomse['status']=='success'){
            $this->success($respomse['message']);
        }else{
            $this->error($respomse['message']);
        }
    }
    public function submitforassessment($id){
        $respomse = $this->mycdprepo->submitforassessment($id);
        if($respomse['status']=='success'){
            $this->success($respomse['message']);
            $this->mycdp = $this->mycdprepo->get($this->id);
        }else{
            $this->error($respomse['message']);
        }
    }
    public function render()
    {
        return view('livewire.admin.components.mycdps');
    }
}
