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
            if(estado === true){
                state = 'Activo';
            } else {
                state = 'N/S';
            }
            return state;
        }

    },
    computed:{}
});