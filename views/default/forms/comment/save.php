<?php
/**
 * Form for adding and editing comments
 *
 * @package Elgg
 *
 * @uses ElggEntity  $vars['entity']  The entity being commented
 * @uses bool        $vars['inline']  Show a single line version of the form?
 */

$entity = elgg_extract('entity', $vars);
/* @var ElggEntity $entity */

$inline = elgg_extract('inline', $vars, false);

$entity_guid_input = '';
if ($entity) {
	$entity_guid_input = elgg_view('input/hidden', array(
		'name' => 'entity_guid',
		'value' => $entity->guid,
	));
}

if ($inline) {
	return;
} else {
	$forum_shortname = elgg_get_plugin_setting('forum_shortname', 'galliDisqus');
?>
	<div id="disqus_thread"></div>
    <script type="text/javascript">
		/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		// required: replace example with your forum shortname
        var disqus_shortname = '<?php echo $forum_shortname;?>'; 
		// The following are highly recommended additional parameters. Remove the slashes in front to use.
		var disqus_identifier = '<?php echo $entity->getGUID(); ?>';
		var disqus_url = '<?php echo $entity->getURL(); ?>';
        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
			var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
<?php
	}
?>	