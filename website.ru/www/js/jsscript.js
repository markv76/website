var entity_map = {
  '&': '&amp;',
  '<': '&lt;',
  '>': '&gt;',
  '"': '&quot;',
  "'": '&#39;',
  '/': '&#x2F;',
  '`': '&#x60;',
  '=': '&#x3D;'
};
function escapeHtml (string){
  return String(string).replace(/[&<>"'`=\/]/g, function (s) {
    return entityMap[s];
  });
}
$('#send').click(
  function(){
    $.post('../include/insert.php', { name_country: escapeHtml($("#name").val()),
  });
});
$('#send').click(
  function add(){
  location.reload();
});
