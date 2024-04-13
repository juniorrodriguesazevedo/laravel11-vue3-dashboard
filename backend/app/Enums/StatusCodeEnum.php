<?php

namespace App\Enums;

class StatusCodeEnum
{
    const HTTP_CONTINUE = 100; // Continuar após a solicitação inicial.
    const HTTP_SWITCHING_PROTOCOLS = 101; // Mudança de protocolo solicitada pelo cliente.
    const HTTP_PROCESSING = 102; // Processamento sendo executado (WebDAV).
    const HTTP_EARLY_HINTS = 103; // Dicas preliminares antes do cabeçalho completo da resposta.

    const HTTP_OK = 200; // Solicitação bem-sucedida.
    const HTTP_CREATED = 201; // Recurso criado com sucesso.
    const HTTP_ACCEPTED = 202; // Solicitação aceita para processamento, mas ainda não concluída.
    const HTTP_NON_AUTHORITATIVE_INFORMATION = 203; // Metainformação retornada não é a versão autenticada original.
    const HTTP_NO_CONTENT = 204; // Solicitação bem-sucedida, mas sem conteúdo para retornar.
    const HTTP_RESET_CONTENT = 205; // Solicitação bem-sucedida; o navegador deve redefinir a visualização do documento.
    const HTTP_PARTIAL_CONTENT = 206; // Parte da solicitação foi bem-sucedida.
    const HTTP_MULTI_STATUS = 207; // Resposta DAV para várias operações.
    const HTTP_ALREADY_REPORTED = 208; // O documento já foi relatado na resposta anterior.
    const HTTP_IM_USED = 226; // Usado para notificar o cliente para limpar a visualização do documento (RFC 3229).

    const HTTP_MULTIPLE_CHOICES = 300; // Solicitação tem várias escolhas disponíveis.
    const HTTP_MOVED_PERMANENTLY = 301; // Recurso foi movido permanentemente.
    const HTTP_FOUND = 302; // Recurso encontrado, mas a localização mudou temporariamente.
    const HTTP_SEE_OTHER = 303; // Cliente deve fazer uma nova solicitação com outra URI.
    const HTTP_NOT_MODIFIED = 304; // Recurso não foi modificado desde a última solicitação.
    const HTTP_USE_PROXY = 305; // Recurso só pode ser acessado através de um proxy.
    const HTTP_RESERVED = 306; // Este código foi usado no passado, mas está reservado para uso futuro.
    const HTTP_TEMPORARY_REDIRECT = 307; // Recurso mudou temporariamente de localização.
    const HTTP_PERMANENTLY_REDIRECT = 308; // Recurso mudou permanentemente de localização.

    const HTTP_BAD_REQUEST = 400; // Solicitação contém sintaxe inválida ou não pode ser processada.
    const HTTP_UNAUTHORIZED = 401; // Requer autenticação para acessar o recurso.
    const HTTP_PAYMENT_REQUIRED = 402; // Reservado para uso futuro.
    const HTTP_FORBIDDEN = 403; // O servidor entende a solicitação, mas recusa-se a autorizá-la.
    const HTTP_NOT_FOUND = 404; // Recurso não foi encontrado no servidor.
    const HTTP_METHOD_NOT_ALLOWED = 405; // Método de solicitação não é permitido para o recurso.
    const HTTP_NOT_ACCEPTABLE = 406; // Recurso não está disponível em um formato que o cliente aceita.
    const HTTP_PROXY_AUTHENTICATION_REQUIRED = 407; // O cliente deve autenticar-se com o proxy.
    const HTTP_REQUEST_TIMEOUT = 408; // Tempo limite da solicitação expirou.
    const HTTP_CONFLICT = 409; // Conflito de solicitação com o estado atual do recurso.
    const HTTP_GONE = 410; // Recurso solicitado não está mais disponível e não será novamente.
    const HTTP_LENGTH_REQUIRED = 411; // O comprimento do conteúdo da solicitação deve ser especificado.
    const HTTP_PRECONDITION_FAILED = 412; // Uma das condições estabelecidas na solicitação falhou.
    const HTTP_PAYLOAD_TOO_LARGE = 413; // O conteúdo da solicitação é maior do que o servidor está disposto a processar.
    const HTTP_URI_TOO_LONG = 414; // O URI da solicitação é muito longo para o servidor processar.
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415; // Tipo de mídia da solicitação não é suportado pelo servidor.
    const HTTP_RANGE_NOT_SATISFIABLE = 416; // O intervalo especificado na solicitação não pode ser satisfeito.
    const HTTP_EXPECTATION_FAILED = 417; // Expectativa indicada pelo campo Expect do cabeçalho não pode ser satisfeita.
    const HTTP_I_AM_A_TEAPOT = 418; // Sou um bule de chá. (RFC 2324)
    const HTTP_MISDIRECTED_REQUEST = 421; // Solicitação foi direcionada a um servidor inadequado. (RFC 7540)
    const HTTP_UNPROCESSABLE_ENTITY = 422; // Solicitação bem formada, mas incapaz de ser processada devido a erros semânticos.
    const HTTP_LOCKED = 423; // O recurso está bloqueado.
    const HTTP_FAILED_DEPENDENCY = 424; // A solicitação depende de outra solicitação que falhou.
    const HTTP_TOO_EARLY = 425; // O servidor não está disposto a arriscar processar uma solicitação que pode ser reexecutada.
    const HTTP_UPGRADE_REQUIRED = 426; // Cliente deve mudar para TLS/1.0. (RFC 2817)
    const HTTP_PRECONDITION_REQUIRED = 428; // O servidor exige que a solicitação seja condicional.
    const HTTP_TOO_MANY_REQUESTS = 429; // O cliente atingiu o limite de solicitações.
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431; // O servidor não está disposto a processar a solicitação porque os campos de cabeçalho são muito grandes.
    const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS = 451; // Acessar o recurso está indisponível por motivos legais.

    const HTTP_INTERNAL_SERVER_ERROR = 500; // Erro interno do servidor.
    const HTTP_NOT_IMPLEMENTED = 501; // Funcionalidade solicitada não é suportada pelo servidor.
    const HTTP_BAD_GATEWAY = 502; // Gateway ou proxy recebeu uma resposta inválida do servidor upstream.
    const HTTP_SERVICE_UNAVAILABLE = 503; // Servidor não está disponível no momento.
    const HTTP_GATEWAY_TIMEOUT = 504; // Tempo limite foi atingido enquanto o servidor aguardava a resposta do gateway.
    const HTTP_VERSION_NOT_SUPPORTED = 505; // Versão do protocolo HTTP não é suportada.
    const HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506; // Variantes também são negociáveis, mas experimentais.
    const HTTP_INSUFFICIENT_STORAGE = 507; // O servidor não pode armazenar a representação necessária para completar a solicitação.
    const HTTP_LOOP_DETECTED = 508; // O servidor detectou um loop infinito ao processar a solicitação.
    const HTTP_NOT_EXTENDED = 510; // Exigido estender a resposta adicional para evitar o problema.
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511; // O cliente precisa autenticar-se para ganhar acesso à rede.
}
