<?php


namespace Hamid;


class EmptyStringProcessor
{
    /**
     * Transform a empty string record into a Empty Short Message.
     *
     * @param array $record
     * @return array
     */
    public function __invoke(array $record): array
    {
        if($record['message'] == ''){
            $record['message'] = 'An empty message';
        }

        return $record;
    }
}