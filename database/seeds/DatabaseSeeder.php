<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PermissionsTableSeeder::class);
         $this->call(RoleTableSeeder::class);
        $this->call(AttendancesTableSeeder::class);
        $this->call(ClazzsTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ExaminationsTableSeeder::class);
        $this->call(ExcusesTableSeeder::class);
        $this->call(GroupMembersTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(InvitationsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(MappingsTableSeeder::class);
        $this->call(MeetingsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PicturesTableSeeder::class);
        $this->call(RolePermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(StudiesTableSeeder::class);
        $this->call(TaggedTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(TimeTablesTableSeeder::class);
        $this->call(TimesTableSeeder::class);
        $this->call(UserFollowersTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VotersTableSeeder::class);
        $this->call(VotesTableSeeder::class);
        $this->call(WorkoutsTableSeeder::class);
    }
}
