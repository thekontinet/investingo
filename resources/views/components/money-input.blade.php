@props(['description' => '', 'label' => null])
<div x-data>
    <div class="invest-field form-group">
        <div class="form-label-group">
            <label class="form-label">{{ $label ?? 'Choose Quick Amount' }}</label>
        </div>
        <div class="invest-amount-group g-2">
            <div class="invest-amount-item">
                <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-1"
                    x-on:change="$refs.input.value = $el.value" value="100">
                <label class="invest-amount-label" for="iv-amount-1">$ 100</label>
            </div>
            <div class="invest-amount-item">
                <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-2" value="250"
                    x-on:change="$refs.input.value = $el.value">
                <label class="invest-amount-label" for="iv-amount-2">$ 250</label>
            </div>
            <div class="invest-amount-item">
                <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-3" value="500"
                    x-on:change="$refs.input.value = $el.value">
                <label class="invest-amount-label" for="iv-amount-3">$ 500</label>
            </div>
            <div class="invest-amount-item">
                <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-4" value="1000"
                    x-on:change="$refs.input.value = $el.value">
                <label class="invest-amount-label" for="iv-amount-4">$ 1,000</label>
            </div>
            <div class="invest-amount-item">
                <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-5" value="1500"
                    x-on:change="$refs.input.value = $el.value">
                <label class="invest-amount-label" for="iv-amount-5">$ 1,500</label>
            </div>
            <div class="invest-amount-item">
                <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-6" value="2000"
                    x-on:change="$refs.input.value = $el.value">
                <label class="invest-amount-label" for="iv-amount-6">$ 2,000</label>
            </div>
        </div>
    </div><!-- .invest-field -->
    <div class="invest-field form-group">
        <label class="form-label">Or Enter Your Amount</label>
        <div class="form-control-group">
            <div class="form-info">USD</div>
            <input type="text" class="form-control form-control-amount form-control-lg" x-ref="input"
                {{ $attributes }}>
        </div>
        <div class="form-note">
            {{ $description }}
        </div>
    </div><!-- .invest-field -->
</div>
