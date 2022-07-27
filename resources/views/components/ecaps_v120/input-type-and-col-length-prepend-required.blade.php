<div class="col-{{$col}}">
    <div class="form-group">
        <div class="input-group"> 
            <div class="input-group-prepend">
                <span class="input-group-text">{{$prepend}}</span>
            </div>
            <input name="{{$name}}" 
                type="{{$type}}" 
                class="form-control"
                value="{{$val}}" 
                required=""> 
            <div class="invalid-feedback">
                Please provide a valid value. Field is required.
            </div>
        </div>
    </div>
</div>