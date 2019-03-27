<template>
    <div>
        <form>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label text-sm-right">Email</label>
                <div class="col-sm">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label text-sm-right">Password</label>
                <div class="col-sm">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-3 pt-0 text-sm-right">Radios</legend>
                    <div class="col-sm">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Second radio
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                            <label class="form-check-label" for="gridRadios3">
                                Third disabled radio
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <div class="col-sm-3 text-sm-right">Switches</div>
                <div class="col-sm">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" v-model="form.airplane" @change="postForm">
                        <label class="custom-control-label" for="customSwitch1">Airplane Mode</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2" v-model="form.cellular" @change="postForm">
                        <label class="custom-control-label" for="customSwitch2">Cellular Data</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3" v-model="form.wifi" @change="postForm">
                        <label class="custom-control-label" for="customSwitch3">Wi-Fi</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4" v-model="form.bluetooth" @change="postForm">
                        <label class="custom-control-label" for="customSwitch4">Bluetooth</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch5" v-model="form.airdrop" @change="postForm">
                        <label class="custom-control-label" for="customSwitch5">AirDrop</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" disabled id="customSwitch6" v-model="form.personal" @change="postForm">
                        <label class="custom-control-label" for="customSwitch6">Personal Hotspot</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="formControlRange" class="col-sm-3 col-form-label text-sm-right">Example range</label>
                <div class="col-sm">
                    <input type="range" class="custom-range mt-1" min="0" max="10" id="formControlRange" v-model="form.range" @change="postForm">
                </div>
                <div class="col-sm-6">{{ form.range }}</div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3 text-sm-right">Checkbox</div>
                <div class="col-sm">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="offset-3 col-sm">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    range: 5,
                    airplane: false,
                    cellular: false,
                    wifi: false,
                    bluetooth: false,
                    airdrop: false,
                    personal: false,
                }
            }
        },

        methods: {
            postForm() {
                axios.post('/custom-form', this.form);
            },

            loadDefaults() {
                axios.get('/form-values').then(({data}) => this.form = data);
            }
        },

        mounted() {
            this.loadDefaults();
        }
    }
</script>
