Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

console.log("Hey!");

var v = new Vue({
    el:'#usuarios',
    data: {},
    ready: function(){
        this.getItems(1);
    },
    methods:{
        getItems: function(page, search){
            if(search == null) {
                this.$http.get('/usuarios/query/index/' + page).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            } else {
                this.$http.get('/usuarios/query/index/' + page + "/"  + search).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            }
        },

        estadoTrans: function(estado) {
            var state = '';

            if ('estado' in estado && estado.estado) {
                state = 'activo';
            } else if(estado === null){
                state = 'n/a';
            }
            else {
                state = 'n/a';
            };

            return state;
        }

    },
    computed:{}
});