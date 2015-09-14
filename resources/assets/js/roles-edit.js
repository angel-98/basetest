(function(){

    /**
     *
     * @param item
     * @returns {*}
     * @constructor
     */

    function FormatSelection(item) {
        return item.name;
    }


    /**
     *
     * @param item
     * @returns {string}
     * @constructor
     */
    function FormatResult(item) {
        var markup = "";
        if (item.name !== undefined) {
            markup += "<option value='" + item.id + "'>" + item.name + "</option>";
        }
        markup += "<a href=''>create</a>";
        return markup;
    }

    $('#roles-permisos').select2({
            width: '100%',
            placeholder: "Seleccione los permisos requeridos",
            multiple: true,
            ajax: {
                cache: true,
                dataType: 'json',
                type: 'GET',
                url: '/permisos/query/permisos-list',
                results: function (data) {
                    return { results: data };
                }
            },
            formatResult: FormatResult,
            formatSelection: FormatSelection,
            escapeMarkup: function (markup) { return markup; }
        });
})();