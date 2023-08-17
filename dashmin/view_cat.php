<?php
include("query.php");
include("header.php");

?>
 <div class="container p-4">
                            <h6 class="display-4 text-info text-center">view category</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"  class="text-center">id</th>
                                        <th scope="col"  class="text-center">name</th>
                                        <th scope="col"  class="text-center">image</th>
                                        <th scope="col" colspan="2" class="text-center">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query=$pdo->query("select * from category");
                                    $data = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($data as $cat){
                                        ?>
                                    <tr>
                                        <th scope="row"  class="text-center"><?php echo $cat['id'];?></th>
                                        <td  class="text-center"><?php echo $cat['name'];?></td>
                                        <td  class="text-center"><img src=<?php echo "img/". $cat['image'];?> width="100px" ></td>
                                        <td  class="text-center">
                                            <form action="" method="get">
                                            <button type="button" class="btn btn-outline-success m-2"><a href="update.php?cid=<?php echo $cat['id']?>" class="text-dark"> Edit</a></button>

                                            </form>
                                        </td> 
                                        <td  class="text-center">
                                      <form action="" method="get">
                                      <button type="button" class="btn btn-outline-danger m-2"><a href="?cid=<?php echo $cat["id"];?>" class="text-dark">Delete</a></button>
                                      </form>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    if(isset($_GET["cid"])){
                                        $id = $_GET['cid'];
                                        $query= $pdo->prepare("delete from category where id =:pid");
                                        $query->bindParam("pid",$id);
                                        $query->execute();
                                        echo "<script>
                                        alert('delete category successfully');
                                location.assign('view_cat.php');
                                        </script>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <?php
                        include("footer.php");
                        ?>