@php
	$captcha = loadCustomCaptcha();
@endphp
@if($captcha)
    <div class="form-group col-md-6">
        @php echo $captcha @endphp
    </div>
    <div class="form-group col-md-6 captcha-lab">
        <span class="promo-lab">Enter code</span>
        <input type="text" name="captcha" class="form-control" required style="border: 1px solid #bebebe">
    </div>
@endif
