<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'Você não tem permissão para aceder à tópico requisitada.',
    'permissionJson' => 'Você não tem permissão para realizar a ação requerida.',

    // Auth
    'error_user_exists_different_creds' => 'Um utilizador com o endereço de e-mail :email já existe mas com credenciais diferentes.',
    'auth_pre_register_theme_prevention' => 'User account could not be registered for the provided details',
    'email_already_confirmed' => 'E-mail já foi confirmado. Tente iniciar sessão.',
    'email_confirmation_invalid' => 'Este token de confirmação não é válido ou já foi utilizado. Por favor, tente registar-se novamente.',
    'email_confirmation_expired' => 'O token de confirmação já expirou. Um novo e-mail foi enviado.',
    'email_confirmation_awaiting' => 'O endereço de e-mail da conta em uso precisa ser confirmado',
    'ldap_fail_anonymous' => 'O acesso LDAP falhou ao tentar usar o anonymous bind',
    'ldap_fail_authed' => 'O acesso LDAP falhou ao tentar os detalhes do dn e senha fornecidos',
    'ldap_extension_not_installed' => 'A extensão LDAP PHP não está instalada',
    'ldap_cannot_connect' => 'Não foi possível conectar ao servidor LDAP. Conexão inicial falhou',
    'saml_already_logged_in' => 'Sessão já iniciada',
    'saml_no_email_address' => 'Não foi possível encontrar um endereço de e-mail para este utilizador nos dados providenciados pelo sistema de autenticação externa',
    'saml_invalid_response_id' => 'A requisição do sistema de autenticação externa não foi reconhecia por um processo iniciado por esta aplicação. Navegar para o caminho anterior após o inicio de sessão pode provocar este problema.',
    'saml_fail_authed' => 'Inicio de sessão com :system falhou. O sistema não forneceu uma autorização bem sucedida',
    'oidc_already_logged_in' => 'Sessão já iniciada',
    'oidc_no_email_address' => 'Não foi possível encontrar um endereço de e-mail para este utilizador nos dados providenciados pelo sistema de autenticação externo',
    'oidc_fail_authed' => 'Inicio de sessão com :system falhou. O sistema não forneceu uma autorização bem sucedida',
    'social_no_action_defined' => 'Nenhuma ação definida',
    'social_login_bad_response' => "Erro recebido durante o inicio de sessão :socialAccount: \n:error",
    'social_account_in_use' => 'Esta conta :socialAccount já está em uso. Por favor, tente entrar utilizando a opção :socialAccount.',
    'social_account_email_in_use' => 'O e-mail :email já está em uso. Se já possui uma conta poderá ligar a sua conta :socialAccount a partir das configurações do seu perfil.',
    'social_account_existing' => 'Esta conta :socialAccount já está vinculada a este perfil.',
    'social_account_already_used_existing' => 'Esta conta :socialAccount já está a ser utilizada por outro utilizador.',
    'social_account_not_used' => 'Esta conta :socialAccount não está vinculada a nenhum utilizador. Por favor vincule a conta nas suas configurações de perfil. ',
    'social_account_register_instructions' => 'Se não possui uma conta, poderá registar-se utilizando a opção :socialAccount.',
    'social_driver_not_found' => 'Social driver não encontrado',
    'social_driver_not_configured' => 'Os seus parâmetros sociais de :socialAccount não estão corretamente configurados.',
    'invite_token_expired' => 'Este link de convite expirou. Alternativamente, pode tentar redefinir a senha da sua conta.',
    'login_user_not_found' => 'A user for this action could not be found.',

    // System
    'path_not_writable' => 'O caminho do arquivo :filePath não pôde ser carregado. Certifique-se de que tem permissões de escrita no servidor.',
    'cannot_get_image_from_url' => 'Não foi possível obter a imagem a partir de :url',
    'cannot_create_thumbs' => 'O servidor não pôde criar as miniaturas de imagem. Por favor, verifique se a extensão GD PHP está instalada.',
    'server_upload_limit' => 'O servidor não permite o carregamento de arquivos com esse tamanho. Por favor, tente fazer o carregamento de arquivos mais pequenos.',
    'server_post_limit' => 'O servidor não pode receber a quantidade de dados fornecida. Tente novamente com menos dados ou um arquivo menor.',
    'uploaded'  => 'O servidor não permite o carregamento de arquivos com esse tamanho. Por favor, tente fazer o carregamento de arquivos mais pequenos.',

    // Drawing & Images
    'image_upload_error' => 'Ocorreu um erro no carregamento da imagem',
    'image_upload_type_error' => 'O tipo de imagem enviada é inválida',
    'image_upload_replace_type' => 'A imagem de substituição deverá ser do mesmo tipo que a anterior',
    'image_upload_memory_limit' => 'Failed to handle image upload and/or create thumbnails due to system resource limits.',
    'image_thumbnail_memory_limit' => 'Failed to create image size variations due to system resource limits.',
    'image_gallery_thumbnail_memory_limit' => 'Failed to create gallery thumbnails due to system resource limits.',
    'drawing_data_not_found' => 'Dados de desenho não puderam ser carregados. Talvez o arquivo de desenho não exista mais ou não tenha permissão para aceder-lhe.',

    // Attachments
    'attachment_not_found' => 'Anexo não encontrado',
    'attachment_upload_error' => 'Ocorreu um erro no carregamento do ficheiro',

    // Pages
    'page_draft_autosave_fail' => 'Falha ao tentar guardar o rascunho. Certifique-se que a conexão de Internet está funcional antes de tentar guardar esta tópico',
    'page_draft_delete_fail' => 'Eliminação do rascunho de tópico e importação do conteúdo salvo da tópico falhou',
    'page_custom_home_deletion' => 'Não é possível eliminar uma tópico que está definida como tópico inicial',

    // Entities
    'entity_not_found' => 'Entidade não encontrada',
    'bookshelf_not_found' => 'Departamento não encontrada',
    'book_not_found' => 'Documentação não encontrado',
    'page_not_found' => 'Tópico não encontrada',
    'chapter_not_found' => 'Artigo não encontrado',
    'selected_book_not_found' => 'O documentação selecionado não foi encontrado',
    'selected_book_chapter_not_found' => 'O Documentação ou Artigo selecionado não foi encontrado',
    'guests_cannot_save_drafts' => 'Convidados não podem guardar rascunhos',

    // Users
    'users_cannot_delete_only_admin' => 'Não pode excluir o único administrador',
    'users_cannot_delete_guest' => 'Não pode excluir o usuário convidado',

    // Roles
    'role_cannot_be_edited' => 'Este cargo não pode ser editado',
    'role_system_cannot_be_deleted' => 'Este cargo é um cargo do sistema e não pode ser excluído',
    'role_registration_default_cannot_delete' => 'Este cargo não poderá se excluído enquanto estiver definido como o cargo padrão',
    'role_cannot_remove_only_admin' => 'Este utilizador é o único vinculado ao cargo de administrador. Atribua o cargo de administrador a outro antes de tentar removê-lo aqui.',

    // Comments
    'comment_list' => 'Ocorreu um erro ao recolher os comentários.',
    'cannot_add_comment_to_draft' => 'Não pode adicionar comentários a um rascunho.',
    'comment_add' => 'Ocorreu um erro ao adicionar/atualizar o comentário.',
    'comment_delete' => 'Ocorreu um erro ao eliminar o comentário.',
    'empty_comment' => 'Não é possível adicionar um comentário vazio.',

    // Error pages
    '404_page_not_found' => 'Tópico Não Encontrada',
    'sorry_page_not_found' => 'Desculpe, a tópico que procura não foi encontrada.',
    'sorry_page_not_found_permission_warning' => 'Se esperava que esta tópico existisse, talvez não tenha permissão para visualizá-la.',
    'image_not_found' => 'Imagem não encontrada',
    'image_not_found_subtitle' => 'Desculpe, o arquivo de imagem que estava à procura não foi encontrado.',
    'image_not_found_details' => 'Se estava à espera que a mesma existisse é possível que tenha sido eliminada.',
    'return_home' => 'Regressar à tópico inicial',
    'error_occurred' => 'Ocorreu um Erro',
    'app_down' => ':appName está fora do ar de momento',
    'back_soon' => 'Voltaremos em breve.',

    // API errors
    'api_no_authorization_found' => 'Nenhum token de autorização encontrado na requisição',
    'api_bad_authorization_format' => 'Um token de autorização foi encontrado na requisição, mas o formato parece incorreto',
    'api_user_token_not_found' => 'Nenhum token de API correspondente foi encontrado para o token de autorização fornecido',
    'api_incorrect_token_secret' => 'O segredo fornecido para o token de API usado está incorreto',
    'api_user_no_api_permission' => 'O proprietário do token de API utilizado não tem permissão para fazer requisições de API',
    'api_user_token_expired' => 'O token de autenticação expirou',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Erro lançado ao enviar um e-mail de teste:',

    // HTTP errors
    'http_ssr_url_no_match' => 'The URL does not match the configured allowed SSR hosts',
];
