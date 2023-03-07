@if (session()->has('message'))
<div class="flash">
    <p class="message">{{session('message')}}</p>
        <button class="cancel">X</button>
        
    </div> 
@endif
