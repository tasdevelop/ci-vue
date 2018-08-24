<div id="root">
 <p>{{message}}</p>
 <input type="text" v-model="message">
 </div>
 <script>
    var app = new Vue({
        name:"testApp",
        el:"#root",
        data () {
            return {
                message: 'Hello Vue.js!',
            }
        }
    })
 </script>