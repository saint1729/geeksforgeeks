<div class="post-info">			
					<div class="post-title-info">
						<h2 class="post-title">Add two numbers without using arithmetic operators</h2>
					</div>			
					<div class="clear"></div>				  
				<div class="post-content" id="post-content">
					<p>Write a function Add() that returns sum of two integers. The function should not use any of the arithmetic operators (+, ++, &#8211;, -, .. etc).<span id="more-18324"></span></p>
<p>Sum of two bits can be obtained by performing XOR (^) of the two bits. Carry bit can be obtained by performing AND (&#038;) of two bits.<br />
Above is simple <a href="http://en.wikipedia.org/wiki/Adder_%28electronics%29#Half_adder">Half Adder</a> logic that can be used to add 2 single bits.  We can extend this logic for integers. If x and y don&#8217;t have set bits at same position(s), then bitwise XOR (^) of x and y gives the sum of x and y. To incorporate common set bits also, bitwise AND (&#038;) is used. Bitwise AND of x and y gives all carry bits. We calculate (x &#038; y) << 1 and add it to x ^ y to get the required result.   </p>
<pre class="brush: cpp; highlight: [3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18]; title: ; notranslate" title="">
#include&lt;stdio.h&gt;

int Add(int x, int y)
{
    // Iterate till there is no carry  
    while (y != 0)
    {
        // carry now contains common set bits of x and y
        int carry = x &amp; y;  

        // Sum of bits of x and y where at least one of the bits is not set
        x = x ^ y; 

        // Carry is shifted by one so that adding it to x gives the required sum
        y = carry &lt;&lt; 1;
    }
    return x;
}

int main()
{
    printf(&quot;%d&quot;, Add(15, 32));
    return 0;
}
</pre>
<p>Following is recursive implementation for the same approach.</p>
<pre class="brush: cpp; highlight: [1,2,3,4,5,6,7]; title: ; notranslate" title="">
int Add(int x, int y)
{
    if (y == 0)
        return x;
    else
        return Add( x ^ y, (x &amp; y) &lt;&lt; 1);
}
</pre>
<p>Please write comments if you find anything incorrect, or you want to share more information about the topic discussed above.</p>
		
&nbsp;
&nbsp;
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Big Rectangle Blog Bottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-9465609616171866"
     data-ad-slot="4061219431"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>



&nbsp;
&nbsp;
&nbsp;
<h3>Related Topics:</h3><ul><li><a href="http://www.geeksforgeeks.org/subtract-two-numbers-without-using-arithmetic-operators/" title="Subtract two numbers without using arithmetic operators">Subtract two numbers without using arithmetic operators</a></li><li><a href="http://www.geeksforgeeks.org/calculate-square-of-a-number-without-using-and-pow/" title="Calculate square of a number without using *, / and pow()">Calculate square of a number without using *, / and pow()</a></li><li><a href="http://www.geeksforgeeks.org/check-binary-representation-number-palindrome/" title="Check if binary representation of a number is palindrome">Check if binary representation of a number is palindrome</a></li><li><a href="http://www.geeksforgeeks.org/swap-two-nibbles-byte/" title="Swap two nibbles in a byte">Swap two nibbles in a byte</a></li><li><a href="http://www.geeksforgeeks.org/how-to-turn-off-a-particular-bit-in-a-number/" title="How to turn off a particular bit in a number?">How to turn off a particular bit in a number?</a></li><li><a href="http://www.geeksforgeeks.org/divisibility-9-using-bitwise-operators/" title="Check if a number is multiple of 9 using bitwise operators">Check if a number is multiple of 9 using bitwise operators</a></li><li><a href="http://www.geeksforgeeks.org/swap-two-numbers-without-using-temporary-variable/" title="How to swap two numbers without using a temporary variable?">How to swap two numbers without using a temporary variable?</a></li><li><a href="http://www.geeksforgeeks.org/divide-and-conquer-set-2-karatsuba-algorithm-for-fast-multiplication/" title="Divide and Conquer | Set 4 (Karatsuba algorithm for fast multiplication)">Divide and Conquer | Set 4 (Karatsuba algorithm for fast multiplication)</a></li></ul>
<p></p> 
<div>
<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.geeksforgeeks.org%2Fadd-two-numbers-without-using-arithmetic-operators%2F&layout=button_count&show_faces=false&width=90&action=like&colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:90px; height:20px"></iframe>
<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.geeksforgeeks.org/add-two-numbers-without-using-arithmetic-operators/" data-text="Add two numbers without using arithmetic operators" data-count="horizontal" data-via="jakerutter">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<g:plusone size="medium" href="http://www.geeksforgeeks.org/add-two-numbers-without-using-arithmetic-operators/"></g:plusone>
<!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></div>





				</div>		  
			</div>