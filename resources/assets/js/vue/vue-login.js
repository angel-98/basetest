Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

vue = new Vue({
    el: '#login',
    data: {
        rows:[],
        email:'',
        pass:'',
        exist: false

    },

    methods:{
        searchEmail:function(){
            //alert('message send');
            this.getEmail(this.email);
            //this.exist = true;
        },//

        getEmail: function(email){
            this.$http.get('/usuarios/query/user-exist/' + email).success(function(data){
                this.$set('rows', data);
                this.exist = true;
            }).error(function(data){
                this.exist = false;
            });
        }
    },

    computed:{}
});