@include('layouts.main')

<body>
<div class="registration-form">
        <form action="{{ route('friend.store') }}" method="post">
            @csrf
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control item" id="name" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="nick_name" class="form-control item" id="nick_name" placeholder="Nick_name">
                @error('nick_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="age" class="form-control item" id="age" placeholder="Age">
                @error('age')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="alive" class="form-control item" id="alive" placeholder="Alive">
                @error('alive')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="prefered_weapon" class="form-control item" id="prefered_weapon" placeholder="Prefered_weapon">
                @error('prefered_weapon')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <select class="form-select item" id="category" name="weapon_id">
                @foreach ($weapons as $weapon)
                <option
                {{ old('weapon_id') == $weapon->id ? 'selected' : '' }} 
                value="{{ $weapon->id }}">{{ $weapon->weapon_name }} </option>
                @endforeach
            </select>


            <select class="form-select item" id="category" name="sex_id">
                @foreach ($sexes as $sex)
                <option value="{{ $sex->id }}"> {{ $sex->sex}}</option>
                @endforeach
            </select>
            
            <!-- Рабочий 1 -->
            <select class="form-select" multiple aria-label="multiple select" id="perks" name="perks[]">
                @foreach ($perks as $perk)
                    <option
                    {{old('perks') != null && in_array($perk->id, old('perks')) ? 'selected' : ''}} 
                    value="{{ $perk->id }}"> {{ $perk->perk}} </option>
                @endforeach
            </select>
            
            <!-- Просто попытка сделать checkbox -->
            @foreach ($perks as $perk)
                <div class="form-check" id="perks" name="perks[]">
                    <input class="form-check-input" type="checkbox" value="{{ $perk->id }}" id="perks">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $perk->perk}}
                    </label>
                </div>
            @endforeach

            <!-- метод тыка возможно рабочий 1 (нихуя не рабочий) -->
            <!-- <div class="form-check" multiple aria-label="multiple select" id="perks" name="perks[]">
                @foreach ($perks as $perk)
                <div class="form-check" id="perks" name="perks[]">
                    <input class="form-check-input" type="checkbox" value="{{ $perk->id }}" id="perks">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $perk->perk}}
                    </label>
                </div>
                @endforeach
            </div> -->


            <div class="form-group">
                <button type="sumbit" class="btn btn-block create-account">Create Friend</button>
            </div>

            
        </form>
        <div class="social-media">
            <h5>Sign up with social media</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
    </div>
</body>
</html>