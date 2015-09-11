Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

var v = new Vue({
    el:'#roles',

    ready: function(){
        this.getItems(1);
    },

    data:{
        rows: [],
        currentPage: 0,
        itemsPerPage: 0,
        resultCount: 0,
        totalPage: 0,
        roles: {
            name: '',
            description: ''
        }
    },

    methods:{

        getItems: function(page, search){
            if(search == null) {
                this.$http.get('/roles/query/index/' + page).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            } else {
                this.$http.get('/roles/query/index/' + page + "/"  + search).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            }
        },

        clearRoles: function(){
          this.roles = {}
        },

        submitRoles: function(e){
            e.preventDefault();
            var roles = this.roles;
            this.$http.post('/roles/', roles).success(function (data, status, request) {
                $('body').toast({
                    content:  'El Rol a sido registrado exitosamente!!'
                });
                this.getItems(1);
            }).error(function(data, status, request){
                $('body').toast({
                    content:  'Hay un error en el envio de esta información!!!'
                });
            });
            $('#modal-create').modal('hide');
            this.clearRoles();
        },

        //****** paginación ************************/
        /*******************************************/

        setPage: function(pageNumber) {
            this.currentPage = pageNumber;
            var spage = (pageNumber + 1);
            this.getItems(spage);
        },

        setTotalPage: function(){
            this.totalPage = Math.ceil(this.resultCount / this.itemsPerPage);
        }
    }


});