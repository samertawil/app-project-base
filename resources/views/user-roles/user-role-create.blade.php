<div>
  

<x-slot:crumb>
    <x-breadcrumb></x-breadcrumb>
</x-slot:crumb>

<form wire:submit="store">
<x-input :value="$user_name" wire:model={{$userID}} disabled ></x-input>

 
<div class="mx-3 ">
    <div class="form-check">
        @foreach ($roles_group as $role_group)
            <input  type="checkbox" value="{{ $role_group->id }}"  wire:model='rolesId'
         
            
                id="{{ $role_group->id }}" class="form-check-input  my-checkbox-lg">
   
             
 
            <label for="{{ $role_group->id }}" class="form-check-label mx-4 " > 
                {{ $role_group->name }}</label>
        @endforeach
    
    </div> 
</div>
<x-button></x-button>
</form>

</div>




