<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/UserManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";

if (isset($_SESSION["user"]['mail']) && isset($_SESSION["user"]['pass'])) {
    $title = "LPST : Mon compte";
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";

    $managerUser = new UserManager();
    $users = $managerUser->getAllUser();
    $count = count($users);
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    }
    else {
        $page = 1;
    }
    ?>

    <main class="flexRow account">
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menuAccount.php";
        ?>
        <div class="flexColumn width65">
            <h1 id="hello">Bonjour, <span class="colorGreen"><?=$firstname . " " . $lastname ?> !</span></h1>
            <section id="otherInformation">
                <div id="containerUserManagement">
                    <h2 class="subtitle">Gestion des utilisateurs</h2>
                    <form action="#" method="post" class="flexCenter">
                        <input class="width30 whiteBorder findUser" type="text" placeholder="Nom">
                        <input class="width30 whiteBorder findUser" type="text" placeholder="Prénom">
                        <input class="send modifyProfil modify margin20 findUser" type="submit" value="Chercher">
                    </form>
                    <table id="tableOrdered" class="flexCenter">
                        <tr class="titleTable">
                            <th class="colorWhite">Nom</th>
                            <th class="colorWhite">Prénom</th>
                            <th class="colorWhite">E-mail</th>
                            <th class="colorWhite">Phone</th>
                            <th class="colorWhite">role</th>
                            <th class="colorWhite">Options</th>
                        </tr>
                            <?php
                            $first = ($page - 1) * 20;
                            $last = ($page * 20) - 1;
                            if ($last > $count) {
                                $last = $count;
                            }
                            for ($i = $first; $i < $last; $i++) {
                                $user = $users[$i]->getData();
                                $firstname = str_replace(" ", "-", ucwords(str_replace("-", " ", $user["firstname"])));
                                $lastname = str_replace(" ", "-", ucwords(str_replace("-", " ", $user["lastname"])));
                                echo "<tr class='trTable'>
                            <td>" . $lastname . "</td>
                            <td>" . $firstname . "</td>
                            <td>" . $user['mail'] . "</td>
                            <td>" . $user['phone'] . "</td>
                            <td>" . $user['role'] . "</td>
                            <td>
                                <button class='buttonClassic'><i class='far fa-trash-alt'></i></button>
                                <button class='buttonClassic'><i class='fas fa-edit'></i></button>
                            </td>
                        </tr>";
                        }
                        ?>
                    </table>
                    <?php
                    $first = ($page - 1) * 20;
                    $last = ($page * 20) - 1;
                    if ($last > $count) {
                        $last = $count;
                    }
                    for ($i = $first; $i < $last; $i++) {
                        $user = $users[$i]->getData();
                        $firstname = str_replace(" ", "-", ucwords(str_replace("-", " ", $user["firstname"])));
                        $lastname = str_replace(" ", "-", ucwords(str_replace("-", " ", $user["lastname"])));
                        echo "<div class='whiteBorder2 flexColumn flexCenter margin15-30 containerUser'>
                                  <p><strong class='colorGreen'>Nom Prénom :</strong> $lastname $firstname</p>
                                  <p><strong class='colorGreen'>Mail :</strong> " . $user['mail'] . "</p>";

                        if ($user['phone'] !== null && $user['phone'] !== "") {
                            echo "<p><strong class='colorGreen'>Tel :</strong> ". $user["phone"] . "</p>";
                        }
                        echo "<p><strong class='colorGreen'>Role :</strong> ". $user['role'] ."</p> </div>";

                    }


                    if ($count > 19) {
                        if ($page < 2) {
                            $prev = 1;
                        }
                        else {
                            $prev = $page - 1;
                        }
                        $max = ceil($count / 19);
                        if ($page > ($max - 1)) {
                            $next = $max;
                        }
                        else {
                            $next = $page + 1;
                        }
                        echo "<div class='flexCenter'>
                    <a class='margin20 underline' href='./userManagement.php?page=$prev'>Page précédente</a>
                    <a class='margin20 underline' href='./userManagement.php?page=$next'>Page suivante</a>

                       </div>";
                    }
                    ?>
                </div>

            </section>
        </div>
    </main>


    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
}
