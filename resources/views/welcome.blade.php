@extends('layouts.app')

@section('content')
    <div id="app">
        <div id="content">
            <div class="d-flex justify-content-center">
                <div class="my-5">
                    <span class="fw-boldest fs-1" v-text="'Hello there'"></span>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const app = Vue.createApp({
            data() {
                return {
                    message: 'Hola, Vue!'
                }
            },
            mounted() {
            },
            methods: {
            },
            watch: {
            }
        });

        app.mount('#app');

    </script>
@endsection
