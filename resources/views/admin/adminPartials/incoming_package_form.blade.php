<div class="form-group{{ $errors->has('carrier') ? ' has-error' : '' }}">
    <label for="carrier">Carrier</label>
    <input id="carrier" type="text" class="form-control input-lg" name="carrier" value="{{ old('carrier', isset($incoming_package->carrier) ? $incoming_package->carrier : '') }}" required>

    @if ($errors->has('carrier'))
        <span class="help-block">
            <strong>{{ $errors->first('carrier') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('tracking_number') ? ' has-error' : '' }}">
    <label for="tracking_number">Tracking Number</label>
    <input id="tracking_number" type="text" class="form-control input-lg" name="tracking_number" value="{{ old('tracking_number', isset($incoming_package->tracking_number) ? $incoming_package->tracking_number : '') }}"required>

    @if ($errors->has('tracking_number'))
        <span class="help-block">
            <strong>{{ $errors->first('tracking_number') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('dd_code') ? ' has-error' : '' }}">
    <label for="dd_code">Discreet Drop Code</label>
    <input id="dd_code" type="tel" class="form-control input-lg" name="dd_code" maxlength="6" value="{{ old('dd_code', isset($incoming_package->dd_code) ? $incoming_package->dd_code : '') }}" required>

    @if ($errors->has('dd_code'))
        <span class="help-block">
            <strong>{{ $errors->first('dd_code') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('sender') ? ' has-error' : '' }}">
    <label for="sender">Sender</label>
    <input id="sender" type="text" class="form-control input-lg" name="sender" value="{{ old('sender', isset($incoming_package->sender) ? $incoming_package->sender : '') }}" required>

    @if ($errors->has('sender'))
        <span class="help-block">
            <strong>{{ $errors->first('sender') }}</strong>
        </span>
    @endif
</div>

<div class="row">
    <div class="col-sm-3 form-group{{ $errors->has('length') ? ' has-error' : '' }}">
        <label for="length">Length (in)</label>
        <input id="length" type="tel" class="form-control input-lg" name="length" maxlength="2" value="{{ old('length', isset($incoming_package->length) ? $incoming_package->length : '') }}" required>

        @if ($errors->has('length'))
            <span class="help-block">
                <strong>{{ $errors->first('length') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-sm-3 form-group{{ $errors->has('width') ? ' has-error' : '' }}">
        <label for="width">Width (in)</label>
        <input id="width" type="tel" class="form-control input-lg" name="width" maxlength="2" value="{{ old('width', isset($incoming_package->width) ? $incoming_package->width : '') }}" required>

        @if ($errors->has('width'))
            <span class="help-block">
                <strong>{{ $errors->first('width') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-sm-3 form-group{{ $errors->has('height') ? ' has-error' : '' }}">
        <label for="height">Height (in)</label>
        <input id="height" type="tel" class="form-control input-lg" name="height" maxlength="2" value="{{ old('height', isset($incoming_package->height) ? $incoming_package->height : '') }}" required>

        @if ($errors->has('height'))
            <span class="help-block">
                <strong>{{ $errors->first('height') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-sm-3 form-group{{ $errors->has('weight_in_oz') ? ' has-error' : '' }}">
        <label for="weight_in_oz">Weight (oz)</label>
        <input id="weight_in_oz" type="tel" class="form-control input-lg" name="weight_in_oz" maxlength="4" value="{{ old('weight_in_oz', isset($incoming_package->weight_in_oz) ? $incoming_package->weight_in_oz : '') }}" required>

        @if ($errors->has('weight_in_oz'))
            <span class="help-block">
                <strong>{{ $errors->first('weight_in_oz') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="row btn-toolbar">
    <div class="col-md-6">
        <button type="submit" class="btn btn-block btn-primary" id="submit_btn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin fa-fw'></i> Saving Package">Save Package</button>
    </div>
    <div class="col-md-6">
        <button class="btn btn-default btn-block" type="button" onclick="back()">Cancel</button>
    </div>
</div>