<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistics')->insert([
            ['user_uuid' => 'de2793d6-a7fc-4192-89d3-78fcc31990ca', 'date' => '2021-12-11', 'opponent_club_id' => 7, 'team_goals' => 15, 'opponent_goals' => 31, 'personal_goals' => 6, 'seven_meter_throws' => 3, 'played_minutes' => 39],
            ['user_uuid' => 'de2793d6-a7fc-4192-89d3-78fcc31990ca', 'date' => '2021-11-11', 'opponent_club_id' => 120, 'team_goals' => 32, 'opponent_goals' => 43, 'personal_goals' => 3, 'seven_meter_throws' => 2, 'played_minutes' => 2],
            ['user_uuid' => 'de2793d6-a7fc-4192-89d3-78fcc31990ca', 'date' => '2021-10-11', 'opponent_club_id' => 104, 'team_goals' => 17, 'opponent_goals' => 27, 'personal_goals' => 1, 'seven_meter_throws' => 2, 'played_minutes' => 21],
            ['user_uuid' => 'de2793d6-a7fc-4192-89d3-78fcc31990ca', 'date' => '2021-09-11', 'opponent_club_id' => 78, 'team_goals' => 25, 'opponent_goals' => 27, 'personal_goals' => 6, 'seven_meter_throws' => 0, 'played_minutes' => 28],
            ['user_uuid' => 'de2793d6-a7fc-4192-89d3-78fcc31990ca', 'date' => '2021-08-11', 'opponent_club_id' => 125, 'team_goals' => 16, 'opponent_goals' => 26, 'personal_goals' => 8, 'seven_meter_throws' => 1, 'played_minutes' => 34],
            ['user_uuid' => '40d37985-7bec-499f-b931-1fe9d692625a', 'date' => '2021-07-11', 'opponent_club_id' => 49, 'team_goals' => 33, 'opponent_goals' => 43, 'personal_goals' => 6, 'seven_meter_throws' => 1, 'played_minutes' => 13],
            ['user_uuid' => '40d37985-7bec-499f-b931-1fe9d692625a', 'date' => '2021-06-11', 'opponent_club_id' => 41, 'team_goals' => 45, 'opponent_goals' => 24, 'personal_goals' => 0, 'seven_meter_throws' => 1, 'played_minutes' => 58],
            ['user_uuid' => '40d37985-7bec-499f-b931-1fe9d692625a', 'date' => '2021-05-11', 'opponent_club_id' => 72, 'team_goals' => 27, 'opponent_goals' => 43, 'personal_goals' => 0, 'seven_meter_throws' => 3, 'played_minutes' => 59],
            ['user_uuid' => '40d37985-7bec-499f-b931-1fe9d692625a', 'date' => '2021-04-11', 'opponent_club_id' => 24, 'team_goals' => 18, 'opponent_goals' => 23, 'personal_goals' => 0, 'seven_meter_throws' => 1, 'played_minutes' => 47],
            ['user_uuid' => '40d37985-7bec-499f-b931-1fe9d692625a', 'date' => '2021-03-11', 'opponent_club_id' => 113, 'team_goals' => 15, 'opponent_goals' => 43, 'personal_goals' => 8, 'seven_meter_throws' => 4, 'played_minutes' => 31],
            ['user_uuid' => '9c136d59-733c-4c61-a12a-fe8eec49d31a', 'date' => '2021-02-11', 'opponent_club_id' => 64, 'team_goals' => 20, 'opponent_goals' => 22, 'personal_goals' => 7, 'seven_meter_throws' => 1, 'played_minutes' => 32],
            ['user_uuid' => '9c136d59-733c-4c61-a12a-fe8eec49d31a', 'date' => '2021-01-11', 'opponent_club_id' => 10, 'team_goals' => 31, 'opponent_goals' => 23, 'personal_goals' => 0, 'seven_meter_throws' => 4, 'played_minutes' => 21],
            ['user_uuid' => '9c136d59-733c-4c61-a12a-fe8eec49d31a', 'date' => '2020-12-11', 'opponent_club_id' => 125, 'team_goals' => 38, 'opponent_goals' => 24, 'personal_goals' => 0, 'seven_meter_throws' => 4, 'played_minutes' => 59],
            ['user_uuid' => '9c136d59-733c-4c61-a12a-fe8eec49d31a', 'date' => '2020-11-11', 'opponent_club_id' => 39, 'team_goals' => 41, 'opponent_goals' => 15, 'personal_goals' => 4, 'seven_meter_throws' => 0, 'played_minutes' => 19],
            ['user_uuid' => '9c136d59-733c-4c61-a12a-fe8eec49d31a', 'date' => '2020-10-11', 'opponent_club_id' => 87, 'team_goals' => 28, 'opponent_goals' => 36, 'personal_goals' => 4, 'seven_meter_throws' => 5, 'played_minutes' => 22],
            ['user_uuid' => '85a4fc04-9611-44dc-9212-17ba1a4fa0fc', 'date' => '2020-09-11', 'opponent_club_id' => 113, 'team_goals' => 34, 'opponent_goals' => 15, 'personal_goals' => 0, 'seven_meter_throws' => 1, 'played_minutes' => 8],
            ['user_uuid' => '85a4fc04-9611-44dc-9212-17ba1a4fa0fc', 'date' => '2020-08-11', 'opponent_club_id' => 86, 'team_goals' => 19, 'opponent_goals' => 25, 'personal_goals' => 3, 'seven_meter_throws' => 2, 'played_minutes' => 10],
            ['user_uuid' => '85a4fc04-9611-44dc-9212-17ba1a4fa0fc', 'date' => '2020-07-11', 'opponent_club_id' => 77, 'team_goals' => 39, 'opponent_goals' => 45, 'personal_goals' => 6, 'seven_meter_throws' => 4, 'played_minutes' => 9],
            ['user_uuid' => '85a4fc04-9611-44dc-9212-17ba1a4fa0fc', 'date' => '2020-06-11', 'opponent_club_id' => 50, 'team_goals' => 40, 'opponent_goals' => 24, 'personal_goals' => 0, 'seven_meter_throws' => 3, 'played_minutes' => 6],
            ['user_uuid' => '85a4fc04-9611-44dc-9212-17ba1a4fa0fc', 'date' => '2020-05-11', 'opponent_club_id' => 60, 'team_goals' => 21, 'opponent_goals' => 36, 'personal_goals' => 1, 'seven_meter_throws' => 4, 'played_minutes' => 40],
            ['user_uuid' => '36430c41-299a-489d-b153-cbc26105187b', 'date' => '2020-04-11', 'opponent_club_id' => 69, 'team_goals' => 44, 'opponent_goals' => 17, 'personal_goals' => 2, 'seven_meter_throws' => 0, 'played_minutes' => 27],
            ['user_uuid' => '36430c41-299a-489d-b153-cbc26105187b', 'date' => '2020-03-11', 'opponent_club_id' => 40, 'team_goals' => 15, 'opponent_goals' => 36, 'personal_goals' => 0, 'seven_meter_throws' => 1, 'played_minutes' => 53],
            ['user_uuid' => '36430c41-299a-489d-b153-cbc26105187b', 'date' => '2020-02-11', 'opponent_club_id' => 13, 'team_goals' => 17, 'opponent_goals' => 38, 'personal_goals' => 4, 'seven_meter_throws' => 5, 'played_minutes' => 19],
            ['user_uuid' => '36430c41-299a-489d-b153-cbc26105187b', 'date' => '2020-01-11', 'opponent_club_id' => 108, 'team_goals' => 27, 'opponent_goals' => 31, 'personal_goals' => 4, 'seven_meter_throws' => 5, 'played_minutes' => 50],
            ['user_uuid' => '36430c41-299a-489d-b153-cbc26105187b', 'date' => '2019-12-11', 'opponent_club_id' => 19, 'team_goals' => 18, 'opponent_goals' => 22, 'personal_goals' => 5, 'seven_meter_throws' => 2, 'played_minutes' => 44],
            ['user_uuid' => 'cc7f216a-6217-4ecd-a60e-183c82283b30', 'date' => '2019-11-11', 'opponent_club_id' => 4, 'team_goals' => 24, 'opponent_goals' => 27, 'personal_goals' => 7, 'seven_meter_throws' => 4, 'played_minutes' => 45],
            ['user_uuid' => 'cc7f216a-6217-4ecd-a60e-183c82283b30', 'date' => '2019-10-11', 'opponent_club_id' => 68, 'team_goals' => 28, 'opponent_goals' => 31, 'personal_goals' => 2, 'seven_meter_throws' => 4, 'played_minutes' => 21],
            ['user_uuid' => 'cc7f216a-6217-4ecd-a60e-183c82283b30', 'date' => '2019-09-11', 'opponent_club_id' => 49, 'team_goals' => 39, 'opponent_goals' => 28, 'personal_goals' => 0, 'seven_meter_throws' => 5, 'played_minutes' => 20],
            ['user_uuid' => 'cc7f216a-6217-4ecd-a60e-183c82283b30', 'date' => '2019-08-11', 'opponent_club_id' => 96, 'team_goals' => 43, 'opponent_goals' => 27, 'personal_goals' => 5, 'seven_meter_throws' => 5, 'played_minutes' => 6],
            ['user_uuid' => 'cc7f216a-6217-4ecd-a60e-183c82283b30', 'date' => '2019-07-11', 'opponent_club_id' => 4, 'team_goals' => 15, 'opponent_goals' => 42, 'personal_goals' => 2, 'seven_meter_throws' => 5, 'played_minutes' => 43],
            ['user_uuid' => '86a9e437-2579-4149-822f-a37839bde98a', 'date' => '2019-06-11', 'opponent_club_id' => 26, 'team_goals' => 16, 'opponent_goals' => 24, 'personal_goals' => 8, 'seven_meter_throws' => 5, 'played_minutes' => 5],
            ['user_uuid' => '86a9e437-2579-4149-822f-a37839bde98a', 'date' => '2019-05-11', 'opponent_club_id' => 66, 'team_goals' => 25, 'opponent_goals' => 17, 'personal_goals' => 6, 'seven_meter_throws' => 4, 'played_minutes' => 26],
            ['user_uuid' => '86a9e437-2579-4149-822f-a37839bde98a', 'date' => '2019-04-11', 'opponent_club_id' => 30, 'team_goals' => 35, 'opponent_goals' => 43, 'personal_goals' => 6, 'seven_meter_throws' => 5, 'played_minutes' => 47],
            ['user_uuid' => '86a9e437-2579-4149-822f-a37839bde98a', 'date' => '2019-03-11', 'opponent_club_id' => 51, 'team_goals' => 23, 'opponent_goals' => 21, 'personal_goals' => 1, 'seven_meter_throws' => 3, 'played_minutes' => 40],
            ['user_uuid' => '86a9e437-2579-4149-822f-a37839bde98a', 'date' => '2019-02-11', 'opponent_club_id' => 46, 'team_goals' => 44, 'opponent_goals' => 44, 'personal_goals' => 4, 'seven_meter_throws' => 5, 'played_minutes' => 5],
            ['user_uuid' => '86a9e437-2579-4149-822f-a37839bde98a', 'date' => '2019-01-11', 'opponent_club_id' => 100, 'team_goals' => 35, 'opponent_goals' => 25, 'personal_goals' => 0, 'seven_meter_throws' => 1, 'played_minutes' => 20],
            ['user_uuid' => '86a9e437-2579-4149-822f-a37839bde98a', 'date' => '2018-12-11', 'opponent_club_id' => 26, 'team_goals' => 19, 'opponent_goals' => 31, 'personal_goals' => 3, 'seven_meter_throws' => 3, 'played_minutes' => 46],
            ['user_uuid' => '86a9e437-2579-4149-822f-a37839bde98a', 'date' => '2018-11-11', 'opponent_club_id' => 38, 'team_goals' => 29, 'opponent_goals' => 15, 'personal_goals' => 5, 'seven_meter_throws' => 1, 'played_minutes' => 19],
            ['user_uuid' => '86a9e437-2579-4149-822f-a37839bde98a', 'date' => '2018-10-11', 'opponent_club_id' => 125, 'team_goals' => 31, 'opponent_goals' => 36, 'personal_goals' => 4, 'seven_meter_throws' => 2, 'played_minutes' => 15],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2018-09-11', 'opponent_club_id' => 16, 'team_goals' => 36, 'opponent_goals' => 30, 'personal_goals' => 3, 'seven_meter_throws' => 5, 'played_minutes' => 59],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2018-08-11', 'opponent_club_id' => 32, 'team_goals' => 24, 'opponent_goals' => 45, 'personal_goals' => 1, 'seven_meter_throws' => 3, 'played_minutes' => 3],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2018-07-11', 'opponent_club_id' => 73, 'team_goals' => 17, 'opponent_goals' => 44, 'personal_goals' => 8, 'seven_meter_throws' => 3, 'played_minutes' => 19],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2018-06-11', 'opponent_club_id' => 56, 'team_goals' => 42, 'opponent_goals' => 25, 'personal_goals' => 6, 'seven_meter_throws' => 0, 'played_minutes' => 6],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2018-05-11', 'opponent_club_id' => 48, 'team_goals' => 38, 'opponent_goals' => 26, 'personal_goals' => 0, 'seven_meter_throws' => 3, 'played_minutes' => 19],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2018-04-11', 'opponent_club_id' => 31, 'team_goals' => 22, 'opponent_goals' => 25, 'personal_goals' => 8, 'seven_meter_throws' => 3, 'played_minutes' => 60],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2018-03-11', 'opponent_club_id' => 9, 'team_goals' => 43, 'opponent_goals' => 18, 'personal_goals' => 5, 'seven_meter_throws' => 5, 'played_minutes' => 22],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2018-02-11', 'opponent_club_id' => 79, 'team_goals' => 15, 'opponent_goals' => 30, 'personal_goals' => 2, 'seven_meter_throws' => 0, 'played_minutes' => 19],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2018-01-11', 'opponent_club_id' => 19, 'team_goals' => 18, 'opponent_goals' => 38, 'personal_goals' => 7, 'seven_meter_throws' => 5, 'played_minutes' => 22],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2017-12-11', 'opponent_club_id' => 22, 'team_goals' => 26, 'opponent_goals' => 17, 'personal_goals' => 4, 'seven_meter_throws' => 5, 'played_minutes' => 40],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2017-11-11', 'opponent_club_id' => 86, 'team_goals' => 39, 'opponent_goals' => 19, 'personal_goals' => 7, 'seven_meter_throws' => 0, 'played_minutes' => 45],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2017-10-11', 'opponent_club_id' => 7, 'team_goals' => 40, 'opponent_goals' => 22, 'personal_goals' => 3, 'seven_meter_throws' => 4, 'played_minutes' => 25],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2017-09-11', 'opponent_club_id' => 124, 'team_goals' => 34, 'opponent_goals' => 42, 'personal_goals' => 4, 'seven_meter_throws' => 0, 'played_minutes' => 33],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2017-08-11', 'opponent_club_id' => 11, 'team_goals' => 43, 'opponent_goals' => 45, 'personal_goals' => 8, 'seven_meter_throws' => 2, 'played_minutes' => 57],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2017-07-11', 'opponent_club_id' => 54, 'team_goals' => 21, 'opponent_goals' => 28, 'personal_goals' => 4, 'seven_meter_throws' => 3, 'played_minutes' => 55],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2017-06-11', 'opponent_club_id' => 85, 'team_goals' => 33, 'opponent_goals' => 33, 'personal_goals' => 0, 'seven_meter_throws' => 4, 'played_minutes' => 48],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2017-05-11', 'opponent_club_id' => 119, 'team_goals' => 44, 'opponent_goals' => 45, 'personal_goals' => 3, 'seven_meter_throws' => 0, 'played_minutes' => 50],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2017-04-11', 'opponent_club_id' => 86, 'team_goals' => 15, 'opponent_goals' => 15, 'personal_goals' => 3, 'seven_meter_throws' => 2, 'played_minutes' => 3],
            ['user_uuid' => '79ede425-1a19-419d-9919-d25296e70015', 'date' => '2017-03-11', 'opponent_club_id' => 28, 'team_goals' => 26, 'opponent_goals' => 37, 'personal_goals' => 5, 'seven_meter_throws' => 2, 'played_minutes' => 16],
            ['user_uuid' => '3cc43aef-4d2e-4119-b1da-2f747c39a586', 'date' => '2017-02-11', 'opponent_club_id' => 46, 'team_goals' => 29, 'opponent_goals' => 44, 'personal_goals' => 0, 'seven_meter_throws' => 2, 'played_minutes' => 58],
            ['user_uuid' => '3cc43aef-4d2e-4119-b1da-2f747c39a586', 'date' => '2017-01-11', 'opponent_club_id' => 112, 'team_goals' => 36, 'opponent_goals' => 35, 'personal_goals' => 4, 'seven_meter_throws' => 3, 'played_minutes' => 34],
            ['user_uuid' => '3cc43aef-4d2e-4119-b1da-2f747c39a586', 'date' => '2016-12-11', 'opponent_club_id' => 67, 'team_goals' => 11, 'opponent_goals' => 29, 'personal_goals' => 8, 'seven_meter_throws' => 5, 'played_minutes' => 8],
        ]);
    }
}
