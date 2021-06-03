<?php
    namespace App\GraphQL\Types;

    use GraphQL\Type\Definition\ObjectType;
    use GraphQL\Type\Definition\Type;

    class QueryType extends ObjectType
    {
        public function __construct()
        {
            $config = $this->config();
            parent::__construct($config);
        }

        private function config()
        {
            return [
                'name' => 'Query',                
                'description' => 'Tipo raiz da API',
                'fields' => [
                    'user' => [
                        'name' => 'User',
                        'type' => Type::string(),
                        'description' => 'Exibe usuário por ID.',
                        'args' => [
                            'id' => Type::id()
                        ]
                    ]
                ]
            ];
        }
    }