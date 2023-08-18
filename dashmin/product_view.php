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
                                        <th scope="col"  class="text-center">Product name</th>
                                        <th scope="col"  class="text-center">Product Quantity</th>
                                        <th scope="col"  class="text-center">Product Price</th>
                                        <th scope="col"  class="text-center">Category Type</th>
                                        <th scope="col"  class="text-center">Image</th>
                                        <th scope="col" colspan="2" class="text-center">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query=$pdo->query("select * from product");
                                    $data = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($data as $pro){
                                        ?>
                                    <tr>
                                        <th scope="row"  class="text-center"><?php echo $pro['id'];?></th>
                                        <td  class="text-center"><?php echo $pro['product_name'];?></td>
                                        <td  class="text-center"><?php echo $pro['product_quantity'];?></td>
                                        <td  class="text-center"><?php echo $pro['product_price'];?></td>
                                        <td  class="text-center"><?php echo $pro['category_type'];?></td>
                                        <td  class="text-center"><img src=<?php echo "img/". $pro['image'];?> width="100px" ></td>
                                        <td  class="text-center">
                                            <form action="" method="get">
                                            <button type="button" class="btn btn-outline-success m-2"><a href="update.php?cid=<?php echo $pro['id']?>" class="text-dark"> Edit</a></button>

                                            </form>
                                        </td> 
                                        <td  class="text-center">
                                      <form action="" method="get">
                                      <button type="button" class="btn btn-outline-danger m-2"><a href="?cid=<?php echo $pro["id"];?>" class="text-dark">Delete</a></button>
                                      </form>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    if(isset($_GET["cid"])){
                                        $id = $_GET['cid'];
                                        $query= $pdo->prepare("delete from product where id =:pid");
                                        $query->bindParam("pid",$id);
                                        $query->execute();
                                        echo "<script>
                                        alert('product deleted successfully');
                                location.assign('product_view.php');
                                        </script>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <?php
                        include("footer.php");
                        ?>