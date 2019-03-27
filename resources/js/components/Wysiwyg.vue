<template>
    <div>
        <input id="trix" type="hidden" name="name" :value="value">

        <trix-editor ref="trix" input="trix" name="test" class="mb-3 trix-editor" :placeholder="placeholder"></trix-editor>

        <button type="button" class="btn btn-primary">Save Draft</button>
    </div>
</template>

<script>
    import Trix from 'trix';

    export default {
        props: ['name', 'value', 'placeholder']
    }
</script>

<style scoped>
    .trix-editor {
        min-height: 200px;
    }
</style>
