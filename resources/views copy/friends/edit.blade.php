@include('layouts.main')

<body>
<div class="registration-form">
        <form action="{{ route('friend.update', $friend) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control item" id="name" placeholder="Name" value="{{ $friend->name }}">
            </div>
            <div class="form-group">
                <input type="text" name="nick_name" class="form-control item" id="nick_name" placeholder="Nick_name" value="{{ $friend->nick_name }}">
            </div>
            <div class="form-group">
                <input type="text" name="age" class="form-control item" id="age" placeholder="Age" value="{{ $friend->age }}">
            </div>
            <div class="form-group">
                <input type="text" name="alive" class="form-control item" id="alive" placeholder="Alive" value="{{ $friend->alive }}"">
            </div>
            <div class="form-group">
                <input type="text" name="prefered_weapon" class="form-control item" id="prefered_weapon" placeholder="Prefered_weapon" value="{{ $friend->prefered_weapon }}">
            </div>

            <select class="form-select item" id="category" name="weapon_id">
                @foreach ($weapons as $weapon)
                <option {{ $weapon->id === $friend->weapon_id ? 'selected' : '' }}
                
                value="{{ $weapon->id }}">{{ $weapon->weapon_name }}</option>
                @endforeach
            </select>


            <select class="form-select item" id="category" name="sex_id">
                @foreach ($sexes as $sex)
                <option {{ $sex->id === $friend->sex_id ? 'selected' : ''}}
                
                value="{{ $sex->id }}"> {{ $sex->sex}}</option>
                @endforeach
            </select>

            <select class="form-select" multiple aria-label="multiple select" id="perks" name="perks[]">
                @foreach ($perks as $perk)
                <option 

                    @foreach ($friend->perks as $friendPerk)
                        {{ $perk->id === $friendPerk->id ? 'selected' : ''}}
                    @endforeach 

                    value="{{ $perk->id }}"> {{ $perk->perk}} 
                </option>
                @endforeach
            </select>

            
            <div class="form-group">
                <button type="sumbit" class="btn btn-block create-account">Update Friend</button>
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