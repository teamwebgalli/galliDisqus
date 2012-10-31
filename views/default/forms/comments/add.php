<?php
/**
 * Elgg comments add form
 *
 * @package Elgg
 *
 * @uses ElggEntity $vars['entity'] The entity to comment on
 * @uses bool       $vars['inline'] Show a single line version of the form?
 */


if (isset($vars['entity'])) {
	$inline = elgg_extract('inline', $vars, false);	
	if ($inline) {
		return;
	} else {
?>
	<div id="disqus_thread"></div>
    <script type="text/javascript">
		/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'simsmedicine'; // required: replace example with your forum shortname
		// The following are highly recommended additional parameters. Remove the slashes in front to use.
		var disqus_identifier = '<?php echo $vars['entity']->getGUID(); ?>';
		var disqus_url = '<?php echo $vars['entity']->getURL(); ?>';
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
	echo elgg_view('input/hidden', array(
		'name' => 'entity_guid',
		'value' => $vars['entity']->getGUID()
	));
}


