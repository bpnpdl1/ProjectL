<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <div class="form-group m-2">

        <label for="{{$name}}"> @php
            echo $label;
        @endphp </label>
        <input type="text" id="{{$name}}" name="{{$name}}" class="form-control" placeholder="{{$placeholder}}">
        <span class="text-danger">
          @error("$name")
            {{$message}}
        @enderror
        </span>
    </div>
</div>