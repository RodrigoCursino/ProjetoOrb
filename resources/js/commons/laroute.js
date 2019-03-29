(function () {

    var laroute = (function () {

        var routes = {

            absolute: false,
            rootUrl: 'http://localhost',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"oauth\/authorize","name":"passport.authorizations.authorize","action":"\Laravel\Passport\Http\Controllers\AuthorizationController@authorize"},{"host":null,"methods":["POST"],"uri":"oauth\/authorize","name":"passport.authorizations.approve","action":"\Laravel\Passport\Http\Controllers\ApproveAuthorizationController@approve"},{"host":null,"methods":["DELETE"],"uri":"oauth\/authorize","name":"passport.authorizations.deny","action":"\Laravel\Passport\Http\Controllers\DenyAuthorizationController@deny"},{"host":null,"methods":["POST"],"uri":"oauth\/token","name":"passport.token","action":"\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken"},{"host":null,"methods":["GET","HEAD"],"uri":"oauth\/tokens","name":"passport.tokens.index","action":"\Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@forUser"},{"host":null,"methods":["DELETE"],"uri":"oauth\/tokens\/{token_id}","name":"passport.tokens.destroy","action":"\Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@destroy"},{"host":null,"methods":["POST"],"uri":"oauth\/token\/refresh","name":"passport.token.refresh","action":"\Laravel\Passport\Http\Controllers\TransientTokenController@refresh"},{"host":null,"methods":["GET","HEAD"],"uri":"oauth\/clients","name":"passport.clients.index","action":"\Laravel\Passport\Http\Controllers\ClientController@forUser"},{"host":null,"methods":["POST"],"uri":"oauth\/clients","name":"passport.clients.store","action":"\Laravel\Passport\Http\Controllers\ClientController@store"},{"host":null,"methods":["PUT"],"uri":"oauth\/clients\/{client_id}","name":"passport.clients.update","action":"\Laravel\Passport\Http\Controllers\ClientController@update"},{"host":null,"methods":["DELETE"],"uri":"oauth\/clients\/{client_id}","name":"passport.clients.destroy","action":"\Laravel\Passport\Http\Controllers\ClientController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"oauth\/scopes","name":"passport.scopes.index","action":"\Laravel\Passport\Http\Controllers\ScopeController@all"},{"host":null,"methods":["GET","HEAD"],"uri":"oauth\/personal-access-tokens","name":"passport.personal.tokens.index","action":"\Laravel\Passport\Http\Controllers\PersonalAccessTokenController@forUser"},{"host":null,"methods":["POST"],"uri":"oauth\/personal-access-tokens","name":"passport.personal.tokens.store","action":"\Laravel\Passport\Http\Controllers\PersonalAccessTokenController@store"},{"host":null,"methods":["DELETE"],"uri":"oauth\/personal-access-tokens\/{token_id}","name":"passport.personal.tokens.destroy","action":"\Laravel\Passport\Http\Controllers\PersonalAccessTokenController@destroy"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"broadcasting\/auth","name":null,"action":"\Illuminate\Broadcasting\BroadcastController@authenticate"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/acompanhamento\/{id}","name":"api.acompanhamento.index","action":"App\Http\Controllers\Api\AcompanhamentoController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/acompanhamento-all\/{id}","name":"api.acompanhamento.list","action":"App\Http\Controllers\Api\AcompanhamentoController@listAcompanhamento"},{"host":null,"methods":["POST"],"uri":"api\/acompanhamento","name":"api.acompanhamento.store","action":"App\Http\Controllers\Api\AcompanhamentoController@store"},{"host":null,"methods":["PUT"],"uri":"api\/acompanhamento\/{id}","name":"api.acompanhmento.update","action":"App\Http\Controllers\Api\AcompanhamentoController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/andamentos-index","name":"api.andamentos.index","action":"App\Http\Controllers\Api\AndamentosConsultaController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/combos-exames","name":"api.combos-exames.index","action":"App\Http\Controllers\Api\CombosExamesController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/combos-exames-pivot\/{comboId}\/{exameId}","name":"api.combos-exames.store.exame","action":"App\Http\Controllers\Api\CombosExamesController@storeExame"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/combos-exames-change-seed\/{pivotId}\/{seed}","name":"api.combos-exames.change.seed","action":"App\Http\Controllers\Api\CombosExamesController@changeSeed"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/combos-exames-delete\/{comboId}\/{exameId}","name":"api.combos-exames.delete","action":"App\Http\Controllers\Api\CombosExamesController@delete"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/combos-exames-get-exames\/{comboId}","name":"api.combos-exames-get.exames","action":"App\Http\Controllers\Api\CombosExamesController@getExamesCombo"},{"host":null,"methods":["POST"],"uri":"api\/combos-exames","name":"api.combos-exames.store","action":"App\Http\Controllers\Api\CombosExamesController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/consultas","name":"api.consulta.index","action":"App\Http\Controllers\Api\ConsultaController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/consultas-by-doutor\/{id}\/{data}","name":"api.consulta.by.doutor","action":"App\Http\Controllers\Api\ConsultaController@consultasByDoctor"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/consulta-get-paciente\/{rg}","name":"api.consulta.get.paciente","action":"App\Http\Controllers\Api\ConsultaController@consultasGetPaciente"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/consulta-change-status\/{consulta}\/{status}","name":"api.consulta.change.status","action":"App\Http\Controllers\Api\ConsultaController@consultasChangeStatus"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/consulta-change-status-doutor\/{consulta}\/{status}","name":"api.consulta.change.status.doutor","action":"App\Http\Controllers\Api\ConsultaController@consultasChangeStatusDoutor"},{"host":null,"methods":["POST"],"uri":"api\/agendar-consulta","name":"api.consulta.agendar","action":"App\Http\Controllers\Api\ConsultaController@agendar"},{"host":null,"methods":["PUT"],"uri":"api\/agendar-consulta","name":"api.consulta.agendar.update","action":"App\Http\Controllers\Api\ConsultaController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/convenio-search","name":"api.convenios.search","action":"App\Http\Controllers\Api\ConveniosController@search"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/convenio-index","name":"api.convenio.index","action":"App\Http\Controllers\Api\ConveniosController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/convenios","name":"api.convenios.index","action":"App\Http\Controllers\API\ConveniosController@index"},{"host":null,"methods":["POST"],"uri":"api\/convenios","name":"api.convenios.store","action":"App\Http\Controllers\API\ConveniosController@store"},{"host":null,"methods":["PUT","PATCH"],"uri":"api\/convenios\/{convenio}","name":"api.convenios.update","action":"App\Http\Controllers\API\ConveniosController@update"},{"host":null,"methods":["DELETE"],"uri":"api\/convenios\/{convenio}","name":"api.convenios.destroy","action":"App\Http\Controllers\API\ConveniosController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/dashboard-index","name":"api.dashboard.index","action":"App\Http\Controllers\Api\DashboardController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/doutores","name":"api.doutores.index","action":"App\Http\Controllers\Api\DoutoresController@index"},{"host":null,"methods":["POST"],"uri":"api\/doutores","name":"api.doutores.store","action":"App\Http\Controllers\Api\DoutoresController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/doutores\/{doutore}","name":"api.doutores.show","action":"App\Http\Controllers\Api\DoutoresController@show"},{"host":null,"methods":["PUT","PATCH"],"uri":"api\/doutores\/{doutore}","name":"api.doutores.update","action":"App\Http\Controllers\Api\DoutoresController@update"},{"host":null,"methods":["DELETE"],"uri":"api\/doutores\/{doutore}","name":"api.doutores.destroy","action":"App\Http\Controllers\Api\DoutoresController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/exame-caracteristica\/{id}","name":"api.exame-caracteristica.index","action":"App\Http\Controllers\Api\ExamesCaracteristicasController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/exame-caracteristica-delete\/{id}","name":"api.exame-caracteristica.delete","action":"App\Http\Controllers\Api\ExamesCaracteristicasController@delete"},{"host":null,"methods":["POST"],"uri":"api\/exame-caracteristica-store","name":"api.exame-caracteristica.store","action":"App\Http\Controllers\Api\ExamesCaracteristicasController@store"},{"host":null,"methods":["PUT"],"uri":"api\/exame-caracteristica-update\/{id}","name":"api.exame-caracteristica.update","action":"App\Http\Controllers\Api\ExamesCaracteristicasController@update"},{"host":null,"methods":["POST"],"uri":"api\/exames-upload","name":"api.exames.upload","action":"App\Http\Controllers\API\ExamesController@excelUpload"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/exames-search","name":"api.exames.search","action":"App\Http\Controllers\API\ExamesController@search"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/exames","name":"api.exames.index","action":"App\Http\Controllers\API\ExamesController@index"},{"host":null,"methods":["POST"],"uri":"api\/exames","name":"api.exames.store","action":"App\Http\Controllers\API\ExamesController@store"},{"host":null,"methods":["PUT","PATCH"],"uri":"api\/exames\/{exame}","name":"api.exames.update","action":"App\Http\Controllers\API\ExamesController@update"},{"host":null,"methods":["DELETE"],"uri":"api\/exames\/{exame}","name":"api.exames.destroy","action":"App\Http\Controllers\API\ExamesController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/historico-anotacao\/{id}","name":"api.historico-anotacao.index","action":"App\Http\Controllers\Api\HistoricoAnotacaoController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/historico-anotacao-delete\/{id}","name":"api.historico-anotacao.delete","action":"App\Http\Controllers\Api\HistoricoAnotacaoController@delete"},{"host":null,"methods":["POST"],"uri":"api\/historico-anotacao","name":"api.historico-anotacao.store","action":"App\Http\Controllers\Api\HistoricoAnotacaoController@store"},{"host":null,"methods":["PUT"],"uri":"api\/historico-anotacao\/{id}","name":"api.historico-anotacao.update","action":"App\Http\Controllers\Api\HistoricoAnotacaoController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/horario","name":"api.horarios.index","action":"App\Http\Controllers\Api\HorariosController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/get-horario","name":"api.horarios.get.horarios","action":"App\Http\Controllers\Api\HorariosController@getHorarios"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/get-horarios-livres\/{ids}","name":"api.horarios.get.horarios.livres","action":"App\Http\Controllers\Api\HorariosController@getHorariosLivres"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/get-horarios-livres-notin\/{date}","name":"api.horarios.livres.not.in","action":"App\Http\Controllers\Api\HorariosController@getHorariosLivresNotIn"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/medicamentos","name":"api.medicamentos.index","action":"App\Http\Controllers\API\MedicamentosController@index"},{"host":null,"methods":["POST"],"uri":"api\/medicamentos-upload","name":"api.medicamentos.upload","action":"App\Http\Controllers\API\MedicamentosController@excelUpload"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/medicamentos-search","name":"api.medicamentos.search","action":"App\Http\Controllers\API\MedicamentosController@search"},{"host":null,"methods":["POST"],"uri":"api\/medicamentos","name":"api.medicamentos.store","action":"App\Http\Controllers\API\MedicamentosController@store"},{"host":null,"methods":["PUT","PATCH"],"uri":"api\/medicamentos\/{medicamento}","name":"api.medicamentos.update","action":"App\Http\Controllers\API\MedicamentosController@update"},{"host":null,"methods":["DELETE"],"uri":"api\/medicamentos\/{medicamento}","name":"api.medicamentos.destroy","action":"App\Http\Controllers\API\MedicamentosController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/paciente-get-historico\/{pacienteId}","name":"api.pacientes.get.historico","action":"App\Http\Controllers\Api\PacientesController@getHistorico"},{"host":null,"methods":["POST"],"uri":"api\/pacientes-upload","name":"api.pacientes.upload","action":"App\Http\Controllers\Api\PacientesController@excelUpload"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/pacientes-search","name":"api.pacientes.search","action":"App\Http\Controllers\Api\PacientesController@search"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/pacientes","name":"api.pacientes.index","action":"App\Http\Controllers\Api\PacientesController@index"},{"host":null,"methods":["POST"],"uri":"api\/pacientes","name":"api.pacientes.store","action":"App\Http\Controllers\Api\PacientesController@store"},{"host":null,"methods":["PUT","PATCH"],"uri":"api\/pacientes\/{paciente}","name":"api.pacientes.update","action":"App\Http\Controllers\Api\PacientesController@update"},{"host":null,"methods":["DELETE"],"uri":"api\/pacientes\/{paciente}","name":"api.pacientes.destroy","action":"App\Http\Controllers\Api\PacientesController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/resultados-get-result\/{id}","name":"api.resultados.get.result","action":"App\Http\Controllers\API\ResultadosController@getResult"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/resultados-get-result-all\/{id}","name":"api.resultados.get.result.all","action":"App\Http\Controllers\API\ResultadosController@getAll"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/resultados-all\/{id}","name":"api.resultados.all","action":"App\Http\Controllers\API\ResultadosController@getAllResults"},{"host":null,"methods":["POST"],"uri":"api\/resultados-save-results","name":"api.resultados.save.results","action":"App\Http\Controllers\API\ResultadosController@saveResults"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/resultados-get-result-solicitacao\/{date}","name":"api.resultados.get.result.solicitacao","action":"App\Http\Controllers\API\ResultadosController@getBySolicitacao"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/resultados-get-result-date\/{dateDe}\/{dateAte}","name":"api.resultados.get.result.date","action":"App\Http\Controllers\API\ResultadosController@getResultDate"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/resultados","name":"api.resultados.index","action":"App\Http\Controllers\API\ResultadosController@index"},{"host":null,"methods":["POST"],"uri":"api\/resultados","name":"api.resultados.store","action":"App\Http\Controllers\API\ResultadosController@store"},{"host":null,"methods":["PUT","PATCH"],"uri":"api\/resultados\/{resultado}","name":"api.resultados.update","action":"App\Http\Controllers\API\ResultadosController@update"},{"host":null,"methods":["DELETE"],"uri":"api\/resultados\/{resultado}","name":"api.resultados.destroy","action":"App\Http\Controllers\API\ResultadosController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/get-status-consultas","name":"api.status.index","action":"App\Http\Controllers\Api\StatusController@getStatus"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/tipos-consultas","name":"api.tipos-consultas.index","action":"App\Http\Controllers\Api\TiposDeConsultasController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/tiposdeconsultas","name":"api.tiposdeconsultas.index","action":"App\Http\Controllers\Api\TiposDeConsultasController@index"},{"host":null,"methods":["POST"],"uri":"api\/tiposdeconsultas","name":"api.tiposdeconsultas.store","action":"App\Http\Controllers\Api\TiposDeConsultasController@store"},{"host":null,"methods":["PUT","PATCH"],"uri":"api\/tiposdeconsultas\/{tiposdeconsulta}","name":"api.tiposdeconsultas.update","action":"App\Http\Controllers\Api\TiposDeConsultasController@update"},{"host":null,"methods":["DELETE"],"uri":"api\/tiposdeconsultas\/{tiposdeconsulta}","name":"api.tiposdeconsultas.destroy","action":"App\Http\Controllers\Api\TiposDeConsultasController@destroy"},{"host":null,"methods":["POST"],"uri":"api\/tiposdeconsultas-upload","name":"api.tiposdeconsultas.upload","action":"App\Http\Controllers\Api\TiposDeConsultasController@excelUpload"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/tiposdeconsultas-search","name":"api.tiposdeconsultas.search","action":"App\Http\Controllers\Api\TiposDeConsultasController@search"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/users-search","name":"api.users.search","action":"App\Http\Controllers\Api\CadastroUsuarioController@search"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/users","name":"api.users.index","action":"App\Http\Controllers\Api\CadastroUsuarioController@index"},{"host":null,"methods":["POST"],"uri":"api\/users","name":"api.users.store","action":"App\Http\Controllers\Api\CadastroUsuarioController@store"},{"host":null,"methods":["PUT","PATCH"],"uri":"api\/users\/{user}","name":"api.users.update","action":"App\Http\Controllers\Api\CadastroUsuarioController@update"},{"host":null,"methods":["DELETE"],"uri":"api\/users\/{user}","name":"api.users.destroy","action":"App\Http\Controllers\Api\CadastroUsuarioController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"home","name":"home","action":"App\Http\Controllers\Web\HomeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"acompanhamento\/{id}","name":"acompanhamentos.index","action":"App\Http\Controllers\Web\AcompanhamentoController@index"},{"host":null,"methods":["POST"],"uri":"atestado","name":"atestado.index","action":"App\Http\Controllers\Web\AtestadosPDFController@index"},{"host":null,"methods":["POST"],"uri":"receituario-simples","name":"atestado.receituario","action":"App\Http\Controllers\Web\AtestadosPDFController@receituario"},{"host":null,"methods":["POST"],"uri":"atestado-simples","name":"atestado.simples","action":"App\Http\Controllers\Web\AtestadosPDFController@atestado"},{"host":null,"methods":["POST"],"uri":"licenca-gestante","name":"atestado.licenca.gestante","action":"App\Http\Controllers\Web\AtestadosPDFController@licencaGestante"},{"host":null,"methods":["POST"],"uri":"receituario-especial","name":"atestado.especial","action":"App\Http\Controllers\Web\AtestadosPDFController@receituarioEspecial"},{"host":null,"methods":["GET","HEAD"],"uri":"cadastro-usuario","name":"cadastro-usuario.index","action":"App\Http\Controllers\Web\CadastroUsuarioController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"consultas","name":"consulta.index","action":"App\Http\Controllers\Web\ConsultaController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"consulta","name":"consulta","action":"App\Http\Controllers\Web\ConsultaController@consultas"},{"host":null,"methods":["GET","HEAD"],"uri":"consulta-get-available-dates\/{doctorId}","name":"consulta.get.available.dates","action":"App\Http\Controllers\Web\ConsultaController@getAvailableDates"},{"host":null,"methods":["GET","HEAD"],"uri":"convenios","name":"convenios.index","action":"App\Http\Controllers\Web\ConveniosController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"dashboard","name":"dashboard.index","action":"App\Http\Controllers\Web\DashboardController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"exames","name":"exames.index","action":"App\Http\Controllers\Web\ExamesController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"import-csv","name":"file.upload","action":"App\Http\Controllers\Web\ImportCSVController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"medicamentos","name":"medicamentos.index","action":"App\Http\Controllers\Web\MedicamentosController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"pacientes\/{id}","name":"paciente.index","action":"App\Http\Controllers\Web\PacienteController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"pacientes","name":"paciente.index","action":"App\Http\Controllers\Web\PacienteController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"resultado-teste\/{date}","name":null,"action":"App\Http\Controllers\Web\ResultadosController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"tipos-consultas","name":"tipos-consultas.index","action":"App\Http\Controllers\Web\TiposDeConsultasController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"slc.js","name":"slc.js","action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"login","name":"login","action":"App\Http\Controllers\Auth\LoginController@showLoginForm"},{"host":null,"methods":["POST"],"uri":"login","name":null,"action":"App\Http\Controllers\Auth\LoginController@login"},{"host":null,"methods":["POST"],"uri":"logout","name":"logout","action":"App\Http\Controllers\Auth\LoginController@logout"},{"host":null,"methods":["GET","HEAD"],"uri":"register","name":"register","action":"App\Http\Controllers\Auth\RegisterController@showRegistrationForm"},{"host":null,"methods":["POST"],"uri":"register","name":null,"action":"App\Http\Controllers\Auth\RegisterController@register"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset","name":"password.request","action":"App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm"},{"host":null,"methods":["POST"],"uri":"password\/email","name":"password.email","action":"App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset\/{token}","name":"password.reset","action":"App\Http\Controllers\Auth\ResetPasswordController@showResetForm"},{"host":null,"methods":["POST"],"uri":"password\/reset","name":null,"action":"App\Http\Controllers\Auth\ResetPasswordController@reset"},{"host":null,"methods":["GET","HEAD"],"uri":"teste\/{id}","name":null,"action":"App\Http\Controllers\Web\AcompanhamentoController@index"}],
            prefix: '',

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                if (this.absolute && this.isOtherHost(route)){
                    return "//" + route.host + "/" + uri + qs;
                }

                return this.getCorrectUrl(uri + qs);
            },

            isOtherHost: function (route){
                return route.host && route.host != window.location.hostname;
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = this.prefix + '/' + uri.replace(/^\/?/, '');

                if ( ! this.absolute) {
                    return url;
                }

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // laroute.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // laroute.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // laroute.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // laroute.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // laroute.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // laroute.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.laroute = laroute;
    }

}).call(this);

