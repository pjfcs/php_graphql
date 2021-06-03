<?php
    use GraphQL\GraphQL;
    use GraphQL\Type\Schema;
    use App\GraphQL\Types\QueryType;
    try{
        $schema = new Schema([
            'query' => new QueryType
        ]);


        $input = file_get_contents('php://input');
        $input = json_decode($input,true);
        $query = $input['query'];
        $variables = $input['variables'] ?? null;
    
        $result = GraphQL::executeQuery($schema, $query, null, null, $variables);
        $output = $result->toArray();
    } catch(\Exception $e) {
        $output = [
            'erros' => [
                [
                    'message' => $e->getMessage()
                ]
            ]
        ];
    }

    header('ContentType: application/json');
    echo json_encode($output);