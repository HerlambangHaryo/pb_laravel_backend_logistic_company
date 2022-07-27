<div class="col-{{$col}}">
    <div class="form-group">
        <div class="input-group"> 
            <input name="{{$name}}" 
                type="{{$type}}" 
                class="form-control"
                value="{{$val}}" 
                required=""> 
            <div class="input-group-append">
                <span class="input-group-text">{{$append}}</span>
            </div>
            <div class="invalid-feedback">
                Please provide a valid value. Field is required.
            </div>
        </div>
    </div>
</div>