<?
  include 'include/template/header.php';
  $items = include 'include/select.php';
?>
<label>Name of the country:</label>
<input type="text" name="name_country" id="name" placeholder="Enter the name of the country..." required pattern="^[a-zA-Z]+$"/>
<button class="btn btn-primary" id="send" type="submit">Add the country</button>
<? if ($items): ?>
  <table class='table table=striped'>
    <tr><th>#</th><th>Name of the country</th></tr>
    <? foreach ($items as $item): ?>
      <tr>
        <td><?=htmlspecialchars($item['id'])?></td>
        <td><?=htmlspecialchars($item['name'])?></td>
      </tr>
    <? endforeach ?>
  </table>
<? endif ?>
<? include 'include/template/footer.php'; ?>
