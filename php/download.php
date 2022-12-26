<?php
$documento = $_POST['documento'];
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=descarga.xls");
?>

<table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nobre completo</th>
                <th scope="col">Tipo de documento</th>
                <th scope="col">No. de documento</th>
                <th scope="col">Programa inscrito</th>
                <th scope="col">Correo electronico</th>
                <th scope="col">Numero de telefono</th>
                <th scope="col">Nombre de contacto de emergencia</th>
                <th scope="col">Numero de contacto de emergencia</th>
                <th scope="col">Pregunta 1</th>
                <th scope="col">Pregunta 2</th>
                <th scope="col">Pregunta 3</th>
                <th scope="col">Pregunta 4</th>
                <th scope="col">Pregunta 5</th>
                <th scope="col">Pregunta 6</th>
                <th scope="col">Pregunta 7</th>
                <th scope="col">Pregunta 8</th>
                <th scope="col">Pregunta 9</th>
                <th scope="col">Pregunta 10</th>
                <th scope="col">Pregunta 11</th>
                <th scope="col">Pregunta 12</th>
                <th scope="col">Pregunta 13</th>
                <th scope="col">Pregunta 14</th>
                <th scope="col">Pregunta 15</th>
                <th scope="col">Pregunta 16</th>
                <th scope="col">Pregunta 17</th>
                <th scope="col">Pregunta 18</th>
                <th scope="col">Pregunta 19</th>
                <th scope="col">Pregunta 20</th>
                <th scope="col">Pregunta 21</th>
                <th scope="col">Pregunta 22</th>
                <th scope="col">Pregunta 23</th>
                <th scope="col">Pregunta 24</th>
                <th scope="col">Pregunta 25 </th>
                <th scope="col">Pregunta 26</th>
                <th scope="col">Pregunta 27</th>
                <th scope="col">Pregunta 28</th>
                <th scope="col">Pregunta 29</th>
                <th scope="col">Pregunta 30</th>
                <th scope="col">Pregunta 31</th>
                <th scope="col">Pregunta 32</th>
                <th scope="col">Pregunta 33</th>
                <th scope="col">Pregunta 34</th>
                <th scope="col">Pregunta 35</th>
                <th scope="col">Pregunta 36</th>
                <th scope="col">Pregunta 37</th>
                <th scope="col">Pregunta 38</th>
                <th scope="col">Pregunta 39</th>
                <th scope="col">Pregunta 40</th>
                <th scope="col">Pregunta 41</th>
                <th scope="col">Pregunta 42</th>
                <th scope="col">Pregunta 43</th>
                <th scope="col">Pregunta 44</th>
                <th scope="col">Pregunta 45</th>
                <th scope="col">Pregunta 46</th>
                <th scope="col">Pregunta 47</th>
                <th scope="col">Pregunta 48</th>
                <th scope="col">Pregunta 49</th>
                <th scope="col">Pregunta 50</th>
                <th scope="col">Pregunta 51</th>
                <th scope="col">Pregunta 52</th>
                <th scope="col">Pregunta 53</th>
                <th scope="col">Pregunta 54</th>
                <th scope="col">Pregunta 55</th>
                <th scope="col">Pregunta 56</th>
                <th scope="col">Pregunta 57</th>
                <th scope="col">Pregunta 58</th>
                <th scope="col">Pregunta 59</th>
                <th scope="col">Pregunta 60</th>
                <th scope="col">Pregunta 61</th>
                <th scope="col">Pregunta 62</th>
                <th scope="col">Pregunta 63</th>
                <th scope="col">Pregunta 64</th>
                <th scope="col">Pregunta 65</th>
                <th scope="col">Pregunta 66</th>
                <th scope="col">Pregunta 67</th>
                <th scope="col">Pregunta 68</th>
                <th scope="col">Pregunta 69</th>
                <th scope="col">Pregunta 70</th>
                <th scope="col">Pregunta 71</th>
                <th scope="col">Pregunta 72</th>
                <th scope="col">Pregunta 73</th>
                <th scope="col">Pregunta 74</th>
                <th scope="col">Pregunta 75</th>
                <th scope="col">Pregunta 76</th>
                <th scope="col">Pregunta 77</th>
                <th scope="col">Pregunta 78</th>
                <th scope="col">Pregunta 79</th>
                <th scope="col">Pregunta 80</th>
                <th scope="col">Pregunta 81</th>
                <th scope="col">Pregunta 82</th>
                <th scope="col">Pregunta 83</th>
                <th scope="col">Pregunta 84</th>
                <th scope="col">Pregunta 85</th>
                <th scope="col">Pregunta 86</th>
                <th scope="col">Pregunta 87</th>
                <th scope="col">Pregunta 88</th>
                <th scope="col">Pregunta 89</th>
                <th scope="col">Pregunta 90</th>
                <th scope="col">Pregunta 91</th>
                <th scope="col">Pregunta 92</th>
                <th scope="col">Pregunta 93</th>
                <th scope="col">Pregunta 94</th>
              </tr>
            </thead>
            <tbody id="table">
            <?php
include 'conexion.php';

$sql = "SELECT datos_personales.*, respuestas.* FROM datos_personales INNER JOIN respuestas ON datos_personales.documento = respuestas.id_user WHERE datos_personales.documento = '$documento'";
  $consulta = mysqli_query($con, $sql);
  if (mysqli_num_rows($consulta) > 0) {
    while($row = mysqli_fetch_assoc($consulta)) {
?>

              <tr>
                <td><?php echo $row["nombre"]; ?></td>
                <td><?php echo $row["td"]; ?></td>
                <td><?php echo $row["documento"]; ?></td>
                <td><?php echo $row["programa"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["celular"]; ?></td>
                <td><?php echo $row["nombre_emergencia"]; ?></td>
                <td><?php echo $row["celular_emergencia"]; ?></td>
                <td><?php echo $row["pregunta1"]; ?></td>
                <td><?php echo $row["pregunta2"]; ?></td>
                <td><?php echo $row["pregunta3"]; ?></td>
                <td><?php echo $row["pregunta4"]; ?></td>
                <td><?php echo $row["pregunta5"]; ?></td>
                <td><?php echo $row["pregunta6"]; ?></td>
                <td><?php echo $row["pregunta7"]; ?></td>
                <td><?php echo $row["pregunta8"]; ?></td>
                <td><?php echo $row["pregunta9"]; ?></td>
                <td><?php echo $row["pregunta10"]; ?></td>
                <td><?php echo $row["pregunta11"]; ?></td>
                <td><?php echo $row["pregunta12"]; ?></td>
                <td><?php echo $row["pregunta13"]; ?></td>
                <td><?php echo $row["pregunta14"]; ?></td>
                <td><?php echo $row["pregunta15"]; ?></td>
                <td><?php echo $row["pregunta16"]; ?></td>
                <td><?php echo $row["pregunta17"]; ?></td>
                <td><?php echo $row["pregunta18"]; ?></td>
                <td><?php echo $row["pregunta19"]; ?></td>
                <td><?php echo $row["pregunta20"]; ?></td>
                <td><?php echo $row["pregunta21"]; ?></td>
                <td><?php echo $row["pregunta22"]; ?></td>
                <td><?php echo $row["pregunta23"]; ?></td>
                <td><?php echo $row["pregunta24"]; ?></td>
                <td><?php echo $row["pregunta25"]; ?></td>
                <td><?php echo $row["pregunta26"]; ?></td>
                <td><?php echo $row["pregunta27"]; ?></td>
                <td><?php echo $row["pregunta28"]; ?></td>
                <td><?php echo $row["pregunta29"]; ?></td>
                <td><?php echo $row["pregunta30"]; ?></td>
                <td><?php echo $row["pregunta31"]; ?></td>
                <td><?php echo $row["pregunta32"]; ?></td>
                <td><?php echo $row["pregunta33"]; ?></td>
                <td><?php echo $row["pregunta34"]; ?></td>
                <td><?php echo $row["pregunta35"]; ?></td>
                <td><?php echo $row["pregunta36"]; ?></td>
                <td><?php echo $row["pregunta37"]; ?></td>
                <td><?php echo $row["pregunta38"]; ?></td>
                <td><?php echo $row["pregunta39"]; ?></td>
                <td><?php echo $row["pregunta40"]; ?></td>
                <td><?php echo $row["pregunta41"]; ?></td>
                <td><?php echo $row["pregunta42"]; ?></td>
                <td><?php echo $row["pregunta43"]; ?></td>
                <td><?php echo $row["pregunta44"]; ?></td>
                <td><?php echo $row["pregunta45"]; ?></td>
                <td><?php echo $row["pregunta46"]; ?></td>
                <td><?php echo $row["pregunta47"]; ?></td>
                <td><?php echo $row["pregunta48"]; ?></td>
                <td><?php echo $row["pregunta49"]; ?></td>
                <td><?php echo $row["pregunta50"]; ?></td>
                <td><?php echo $row["pregunta51"]; ?></td>
                <td><?php echo $row["pregunta52"]; ?></td>
                <td><?php echo $row["pregunta53"]; ?></td>
                <td><?php echo $row["pregunta54"]; ?></td>
                <td><?php echo $row["pregunta55"]; ?></td>
                <td><?php echo $row["pregunta56"]; ?></td>
                <td><?php echo $row["pregunta57"]; ?></td>
                <td><?php echo $row["pregunta58"]; ?></td>
                <td><?php echo $row["pregunta59"]; ?></td>
                <td><?php echo $row["pregunta60"]; ?></td>
                <td><?php echo $row["pregunta61"]; ?></td>
                <td><?php echo $row["pregunta62"]; ?></td>
                <td><?php echo $row["pregunta63"]; ?></td>
                <td><?php echo $row["pregunta64"]; ?></td>
                <td><?php echo $row["pregunta65"]; ?></td>
                <td><?php echo $row["pregunta66"]; ?></td>
                <td><?php echo $row["pregunta67"]; ?></td>
                <td><?php echo $row["pregunta68"]; ?></td>
                <td><?php echo $row["pregunta69"]; ?></td>
                <td><?php echo $row["pregunta70"]; ?></td>
                <td><?php echo $row["pregunta71"]; ?></td>
                <td><?php echo $row["pregunta72"]; ?></td>
                <td><?php echo $row["pregunta73"]; ?></td>
                <td><?php echo $row["pregunta74"]; ?></td>
                <td><?php echo $row["pregunta75"]; ?></td>
                <td><?php echo $row["pregunta76"]; ?></td>
                <td><?php echo $row["pregunta77"]; ?></td>
                <td><?php echo $row["pregunta78"]; ?></td>
                <td><?php echo $row["pregunta79"]; ?></td>
                <td><?php echo $row["pregunta80"]; ?></td>
                <td><?php echo $row["pregunta81"]; ?></td>
                <td><?php echo $row["pregunta82"]; ?></td>
                <td><?php echo $row["pregunta83"]; ?></td>
                <td><?php echo $row["pregunta84"]; ?></td>
                <td><?php echo $row["pregunta85"]; ?></td>
                <td><?php echo $row["pregunta86"]; ?></td>
                <td><?php echo $row["pregunta87"]; ?></td>
                <td><?php echo $row["pregunta88"]; ?></td>
                <td><?php echo $row["pregunta89"]; ?></td>
                <td><?php echo $row["pregunta90"]; ?></td>
                <td><?php echo $row["pregunta91"]; ?></td>
                <td><?php echo $row["pregunta92"]; ?></td>
                <td><?php echo $row["pregunta93"]; ?></td>
                <td><?php echo $row["pregunta94"]; ?></td>
              </tr>
            </tbody>
            <?php
        }
    }else{
      echo "No se encontraron Resultados";
    }
  
  ?>
          </table>