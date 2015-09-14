Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

var v = new Vue({
    el:'#permisos',

    ready: function(){
        this.getItems(1);
    },
    data:{
        rows: [],
        currentPage: 0,
        itemsPerPage: 0,
        resultCount: 0,
        totalPage: 0,
        permisos: {
            name: '',
            description: ''
        },
        editPerms:[]
    },

    methods:{

        getItems: function(page, search){
            if(search == null) {
                this.$http.get('/permisos/query/index/' + page).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            } else {
                this.$http.get('/permisos/query/index/' + page + "/"  + search).success(function(data){
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

        /**
         *
         * @param e
         */
        submitCreate: function(e){
            e.preventDefault();
            var permisos = this.permisos;
            this.$http.post('/permisos/', permisos).success(function (data, status, request) {
                $('body').toast({
                    content:  'El permiso a sido registrado exitosamente!!'
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

        /** Edición de fila *******************
         * @param row
         */
        getRowEdit: function(row){
            $('#modal-edit').modal().focus();
            this.editPerms = row;
        },

        submitEdit: function(e){
            e.preventDefault();
            var editPerms = this.editPerms;
            this.$http.put('/permisos/' + editPerms.id, editPerms).success(function (data, status, request) {
                $('body').toast({
                    content:  'El permiso a sido registrado exitosamente!!'
                });
                this.getItems(1);
            }).error(function(data, status, request){
                $('body').toast({
                    content:  'Hay un error en el envio de esta información!!!'
                });
            });
            $('#modal-edit').modal('hide');
            this.clearRoles();
        },

        /** Edición de fila *******************
         * @param row
         */
        getRowDelete: function(row){
            $('#modal-delete').modal();
            this.permisos = row;
        },

        submitDelete: function(e){
            e.preventDefault();
            var permisos = this.permisos;
            this.$http.delete('/permisos/' + permisos.id, permisos).success(function (data, status, request) {
                $('body').toast({
                    content:  'El permiso a sido eliminado exitosamente!!'
                });
                this.getItems(1);
            }).error(function(data, status, request){
                $('body').toast({
                    content:  'Hay un error en el envio de esta información!!!'
                });
            });
            $('#modal-delete').modal('hide');
            this.permisos = {};
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