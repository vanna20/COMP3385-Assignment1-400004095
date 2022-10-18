<?php
class IndexModel extends Model
{
    public function getAll(): array
    {
        #return all the courses in the courses.json file
        $jsonData = $this->loadData(DATA_DIR . '/courses.json');

        // next stage, get most popular and most favourite
        $popular_column = array_column($jsonData['courses'], 3);
        $recommended_column = array_column($jsonData['courses'], 2);
        $extra = $jsonData['courses'];

        #The array is sorted from course with the most recommended first
        array_multisort($popular_column, SORT_DESC, $extra);
        #the array is sliced and the first 8 courses are returned.
        $popular = array_slice($extra, 0, 8);

        #The array is sorted from course with the most recommended first
        array_multisort($recommended_column, SORT_DESC, $data['courses']);
        #the array is sliced and the first 8 courses are returned.
        $recommended = array_slice($extra, 0, 8);


        return ['popular'=>$popular, 'recommended'=>$recommended];

    }

    public function getRecord(string $id): array
    {
        return [];
    }
}
