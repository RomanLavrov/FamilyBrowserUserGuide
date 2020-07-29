<h4 class="mb-3">Benutzerverwaltung</h4>
<table class="table table-hover">
    <thead>
        <tr>
            <th class="text-center" style="width: 5%">ID</th>
            <th style="width: 20%">Name</th>
            <th style="width: 30%">Login/Mail</th>
            <th style="width: 30%">Role</th>
            <th class="text-center" style="width: 15%">Orders</th>
        </tr>
    </thead>
    <tbody>
    <?php $counter = 1?>
        <?php foreach ($this->users as $user) : ?>
            
            <tr class="align-middle userData" class="text-md-left" data-userid="<?php print htmlentities($user['idUsers']) ?>">
                <td class="align-middle text-center"><?php print htmlentities($counter++) ?></td>
                <td class="align-middle font-weight-bold"><?php print htmlentities($user['FirstName'] . " " . $user['LastName']) ?></td>
                <td class="align-middle"><?php print htmlentities($user['Login']) ?></td>
                <td class="align-middle">
                    <select class="custom-select userRoles" data-userid = "<?php print htmlentities($user['idUsers'])?>">
                        <?php foreach ($this->roles as $role) : ?>
                            <option <?php if ($role['idRoles'] == $user['RoleId']) print htmlentities('selected')?> value=" <?php print htmlentities($role['idRoles']) ?>">
                                <?php print htmlentities($role['RoleName']) ?>
                            </option>
                        <?php endforeach ?>
                        <option class="bg-danger text-white" value="0">Löschen</option>
                    </select>
                </td>
                <td class="align-middle text-center"><?php print htmlentities($user['Orders']) ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<script src="/FamilyBrowser/js/userManagement.js"></script>