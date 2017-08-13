<?php
if (!function_exists('renderDataAttributes')) {
    function renderDataAttributes($attributes)
    {
        $mapped = [ ];
        foreach ($attributes as $key => $value) {
            $mapped[] = 'data-' . $key . '="' . $value . '"';
        };

        return implode(' ', $mapped);
    }
}
?>
<div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
    <div class="col-md-6 col-md-offset-4">
        @if(!empty($options))
            <script type="text/javascript">
                var RecaptchaOptions = <?=json_encode($options) ?>;
            </script>
        @endif
        <script src='https://www.google.com/recaptcha/api.js?render=onload{{ (isset($lang) ? '&hl='.$lang : '') }}'></script>
        <div class="g-recaptcha" data-sitekey="{{ $public_key }}" <?=renderDataAttributes($dataParams)?>></div>
        <noscript>
            <div class="container-captcha">
                <div class="container-captcha box1">
                    <div class="container-captcha box2">
                        <iframe src="https://www.google.com/recaptcha/api/fallback?k={{ $public_key }}"
                                frameborder="0" scrolling="no"
                                class="container-captcha">
                        </iframe>
                    </div>
                    <div class="box3">
                <textarea id="g-recaptcha-response box3" name="g-recaptcha-response"
                          class="g-recaptcha-response">
                </textarea>
                </div>
                </div>
            </div>
        </noscript>
        @if ($errors->has('g-recaptcha-response'))
            <span class="help-block">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
        @endif
    </div>
</div>