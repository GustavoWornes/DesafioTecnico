var consultasSalvas = JSON.parse(localStorage.getItem('consultas')) || [];

        function consultarCEP() {
            var cep = document.getElementById("cepInput").value;
            if (consultasSalvas.some(c => c.cep === cep)) {
                alert("Este CEP já foi pesquisado anteriormente.");
                return;
            }
            var url = `https://viacep.com.br/ws/${cep}/json/`;

            $.ajax({
                url: url,
                dataType: 'json',
                success: function(data) {
                    if (data.erro) {
                        alert("CEP não encontrado.");
                        return;
                    }
                    consultasSalvas.push(data);
                    localStorage.setItem('consultas', JSON.stringify(consultasSalvas));
                    atualizarTabela();
                },
                error: function() {
                    alert("Ocorreu um erro ao consultar o CEP, tente novamente!");
                }
            });
        }

        function limparConsultas() {
            localStorage.removeItem('consultas');
            atualizarTabela();
            location.reload();
        }

        function atualizarTabela() {
            $('#consultas').DataTable().clear().destroy();
            var table = $('#consultas').DataTable({
                data: consultasSalvas,
                columns: [
                    { data: 'cep' },
                    { data: 'logradouro' },
                    { data: 'bairro' },
                    { data: 'localidade' },
                    { data: 'uf' }
                ]
            });
        }

