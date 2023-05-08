    Nombre:
    <input type="text" name="name" id="name" value="{{ isset($pets)?$pets->name:'' }}" /><br />
    @error('name')
        <div class="error-message"> {{ $message }} </div> <br>
    @enderror
    
    Edad:
    <input type="number" name="age" id="age" value="{{ isset($pets)?$pets->age:'' }}" /><br />
    @error('age')
        <div class="error-message"> {{ $message }} </div> <br>
    @enderror
    
    peso (kg)
    <input type="number" name="weight_kg" id="weight_kg" value="{{ isset($pets)?$pets->weight_kg:'' }}"/> <br/>
    <!-- mostrar propietarios-->
    @error('weight_kg')
        <div class="error-message"> {{ $message }} </div> <br>
    @enderror
    
    Propietario
    <select name="owner_id">
        <option value=""></option>
        @foreach($owners as $own)
            <option value="{{$own->id}}" {{ isset($pets->owner_id) == $own->id ? 'selected' : '' }}>
                {{ $own->full_name }}
            </option>
        @endforeach    
    </select>
    @error('owner_id')
        <div class="error-message"> {{ $message }} </div> <br>
    @enderror
    
    <button type="submit">Guardar</button>



<style>
        
</style>