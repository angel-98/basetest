Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

// Let's use a custom directive to wrap the select2 library
// so that we can reuse it easily in any part of our Vue.js app.

Vue.directive('roles', {

    // Since we expect to sync value back to the vm,
    // we need to signal this is a two-way directive
    // so that we can use `this.set()` inside directive
    // functions.
    twoWay: true,

    bind: function () {
        var optionsData;
        // retrive the value of the options attribute
        var optionsExpression = this.el.getAttribute('options');
        if (optionsExpression) {
            // if the value is present, evaluate the dynamic data
            // using vm.$eval here so that it supports filters too
            optionsData = this.vm.$eval(optionsExpression);
        }
        // initialize select2
        var self = this;
        $(this.el)
            .select2({
                width: '100%',
                data: optionsData,
                multiple: true
            })
            .on('change', function () {
                // sync the data to the vm on change.
                // `self` is the directive instance
                // `this` points to the <select> element
                self.set(this.value)
            })
    },

    update: function (value) {
        // sync vm data change to select2
        $(this.el).val(value).trigger('change')
    },

    unbind: function () {
        // don't forget to teardown listeners and stuff.
        $(this.el).off().select2('destroy')
    }
});

var v = new Vue({
    el:'#usuarios',

    data: {
        selected: [],
        roles: [],
        onSuspendMsg:'Esta función se podra ser revertida, pero la cuenta no tendra acceso al sistema !!',
        onActiveMsg: 'El usuario ingresara al sistema con su cuenta normalmente y podra efectuar todas las operaciones que su rol le permita !!',
        user: {},
        msg: 'hello!'
    },

    ready: function(){
        this.getItems(1);
        this.getRoles();
    },

    methods: {

        /** Funciones de carga de datos **/

        getRoles: function () {
            this.$http.get('roles/query/roles-list/').success(function (data) {
                this.$set('roles', data);
            });
        },

        getItems: function (page, search) {
            if (search == null) {
                this.$http.get('/usuarios/query/index/' + page).success(function (data) {
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            } else {
                this.$http.get('/usuarios/query/index/' + page + "/" + search).success(function (data) {
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            }
        },

        /** Funciones de evaluación **/

        estadoTrans: function (estado) {

            var state = '';
            if (estado === true) {
                state = 'wicon wicon-user';
            } else {
                state = 'wicon wicon-sad';
            }
            return state;
        },

        userStatusEval: function (user) {
            if (user.estado === false) {
                return 'Activar';
            }
            return 'Desactivar'
        },

        clearUsers: function () {
            this.user = [];
        },

        /** funciones de Rol ***/

        setUser: function (row) {
            //e.preventDefault();
            this.clearUsers()
            this.user = row;
            $('#modal-asigned').modal();
        },

        submitAsigned: function (e) {

            e.preventDefault();

            var user = this.user;

            this.$http.post('/usuarios/roles/' + user.id, user).success(function (data, status, request) {
                $('body').toast({
                    content: 'El rol a sido asignado exitosamente!!'
                });
                this.getItems(1);
            }).error(function (data, status, request) {
                $('body').toast({
                    content: 'Hay un error en el envio de esta información!!!'
                });
            });
            this.clearUsers();
            $('#modal-asigned').modal('hide');

        },

        /** Funciones de activación **/

        setUserStatus: function (row) {
            this.clearUsers();
            this.user = row;
            if (this.user.estado === false) {
                this.user.msgTitle = 'REACTIVAR CUENTA'
                this.user.msgEstado = 'REACTIVAR';
                this.user.msgPost = this.onActiveMsg;
            } else {
                this.user.msgTitle = 'SUSPENDER CUENTA'
                this.user.msgEstado = 'SUSPENDER';
                this.user.msgPost = this.onSuspendMsg;
            }

            $('#modal-status').modal();
        },

        submitStatus: function (e) {
            e.preventDefault();
            var user = this.user;
            if (this.user.estado === false) {
                user.estado = true;
            } else {
                user.estado = false;
            }

            this.$http.post('/usuarios/query/user-estado/' + user.id, user).success(function (data, status, request) {
                $('body').toast({
                    content: 'El usuario a sido modificado exitosamente!!'
                });
                $('#modal-status').modal('hide');
                this.getItems(1);
            }).error(function (data, status, request) {
                $('body').toast({
                    content: 'Hay un error en el envio de esta información!!!'
                });
                $('#modal-status').modal('hide');
            });
        },

        /** Delete user *****/

        setUserDelete: function (row) {
            //e.preventDefault();
            this.clearUsers()
            this.user = row;
            $('#modal-delete').modal();
        },

        submitDelete: function (e) {
            e.preventDefault();
            var user = this.user;
            this.$http.delete('/usuarios/' + user.id, user).success(function (data, status, request) {
                $('body').toast({
                    content: 'El usuario a sido eliminado correctamente !!'
                });
                $('#modal-delete').modal('hide');
                this.getItems(1);
            }).error(function (data, status, request) {
                $('body').toast({
                    content: 'Hay un error en el envio de esta información!!!'
                });
                $('#modal-delete').modal('hide');
            });
        },

        //****** paginación ************************/
        /*******************************************/

        setPage: function (pageNumber) {
            this.currentPage = pageNumber;
            var spage = (pageNumber + 1);
            this.getItems(spage);
        },

        setTotalPage: function () {
            this.totalPage = Math.ceil(this.resultCount / this.itemsPerPage);
        }

    },
    computed:{}
});