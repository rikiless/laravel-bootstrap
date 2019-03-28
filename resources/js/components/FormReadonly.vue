<template>
    <div class="card mb-4 shadow-sm">
        <h5 class="card-header">
            Readonly Plain Text
            <a href="#" v-if="! editing" @click.prevent="editing = true" class="float-right"><i class="far fa-edit"></i></a>
            <a href="#" v-if="! editing" @click.prevent="editing = true" class="float-right pr-3"><i class="far fa-trash-alt"></i></a>
        </h5>
        <div class="card-body">
            <form autocomplete="off">
                <div class="form-group row">
                    <label for="inputName2" class="col-sm-3 col-form-label text-right">Name</label>
                    <div class="col-sm">
                        <input v-bind:class="[errors.name ? 'is-invalid' : '', editing ? 'form-control' : 'form-control-plaintext']"
                               v-bind:readonly="! editing"
                               type="text"
                               name="name"
                               id="inputName2"
                               placeholder="Type Your Name"
                               v-model="form.name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail2" class="col-sm-3 col-form-label text-right">Email</label>
                    <div class="col-sm">
                        <input v-bind:class="[errors.name ? 'is-invalid' : '', editing ? 'form-control' : 'form-control-plaintext']"
                               v-bind:readonly="! editing"
                               type="text"
                               name="email"
                               id="inputEmail2"
                               placeholder="Type Your Email"
                               v-model="form.email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputQuestion2" class="col-sm-3 col-form-label text-right">Question</label>
                    <div class="col-sm">
                            <textarea v-bind:class="[errors.name ? 'is-invalid' : '', editing ? 'form-control' : 'form-control-plaintext']"
                                      v-bind:readonly="! editing"
                                      v-bind:rows="editing ? 5 : 1"
                                      v-model="form.question"
                                      placeholder="Type your question here"
                                      name="question"
                                      id="inputQuestion2"></textarea>
                    </div>
                </div>

                <div class="form-group row mb-0" v-if="editing">
                    <div class="offset-sm-3 col-sm">
                        <button type="button" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    name: 'John Doe',
                    email: 'john@doe.com',
                    question: 'I don\' have a question.',
                },
                editing: false,
                errors: {},
            }
        },

        methods: {
        }
    }
</script>
