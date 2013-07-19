<div class="col-right sidebar grid_6 omega">
    <div class="block block-layered-nav">
        <div class="block-title">
            <strong><span>Browse By</span></strong>
        </div>
        <div class="block-content">
            <dl id="narrow-by-list2">
                <dt>Category</dt>
                <dd>
                    <ol>
                        <li>
                            <a href="earrings/glass-earrings.html">Glass Earrings</a> (6)
                        </li>
                        <li>
                            <a href="earrings/metal-earrings.html">Metal Earrings</a> (6)
                        </li>
                        <li>
                            <a href="earrings/plastic-earrings.html">Plastic Earrings</a> (7)
                        </li>
                    </ol>
                </dd>
            </dl>
            <script type="text/javascript">decorateDataList('narrow-by-list2')</script>
        </div>
    </div>
    <div class="block block-cart">
        <div class="block-title">
            <strong><span>My Cart</span></strong>
        </div>
        <div class="block-content">
            <p class="empty">You have no items in your shopping cart.</p>
        </div>
    </div>
    <div class="block block-list block-compare">
        <div class="block-title">
            <strong><span>Compare Products </span></strong>
        </div>
        <div class="block-content">
            <p class="empty">You have no items to compare.</p>
        </div>
    </div>
    <div class="block block-subscribe">
        <form action="http://livedemo00.template-help.com/magento_42124/newsletter/subscriber/new/" method="post"
              id="newsletter-validate-detail">
            <div class="block-title"><strong><span>Newsletter</span></strong></div>
            <div class="block-content">
                <div class="input-box">
                    <input type="email" name="email" id="newsletter" title="Newsletter"
                           class="input-text required-entry validate-email"/>
                </div>
                <div class="actions">
                    <button type="submit" title="Subscribe" class="button"><span><span>Subscribe</span></span></button>
                </div>
            </div>
        </form>
        <script type="text/javascript">
            //<![CDATA[
            var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
            //]]>
        </script>
    </div>
    <div class="block block-tags">
        <div class="block-title">
            <strong><span>Popular Tags</span></strong>
        </div>
        <div class="block-content">
            <ul class="tags-list">
                <li><a href="tag/product/list/tagId/9/index.htm" style="font-size:145%;">accessories</a></li>
                <li><a href="tag/product/list/tagId/11/index.htm" style="font-size:75%;">babies</a></li>
                <li><a href="tag/product/list/tagId/7/index.htm" style="font-size:145%;">beautiful</a></li>
                <li><a href="tag/product/list/tagId/3/index.htm" style="font-size:75%;">character</a></li>
                <li><a href="tag/product/list/tagId/1/index.htm" style="font-size:145%;">children</a></li>
                <li><a href="tag/product/list/tagId/8/index.htm" style="font-size:110%;">collections</a></li>
                <li><a href="tag/product/list/tagId/4/index.htm" style="font-size:110%;">happiness</a></li>
                <li><a href="tag/product/list/tagId/10/index.htm" style="font-size:145%;">premium</a></li>
                <li><a href="tag/product/list/tagId/5/index.htm" style="font-size:75%;">smiles</a></li>
                <li><a href="tag/product/list/tagId/6/index.htm" style="font-size:110%;">unselfishly</a></li>
                <li><a href="tag/product/list/tagId/2/index.htm" style="font-size:75%;">wealth</a></li>
            </ul>
            <div class="actions">
                <a href="tag/list/index.htm">View All Tags</a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        //<![CDATA[
        function validatePollAnswerIsSelected() {
            var options = $$('input.poll_vote');
            for (i in options) {
                if (options[i].checked == true) {
                    return true;
                }
            }
            return false;
        }
        //]]>
    </script>
    <div class="block block-poll">
        <div class="block-title">
            <strong><span>Community Poll</span></strong>
        </div>
        <form id="pollForm" action="http://livedemo00.template-help.com/magento_42124/poll/vote/add/poll_id/1/"
              method="post" onsubmit="return validatePollAnswerIsSelected();">
            <div class="block-content">
                <p class="block-subtitle">What is the main reason for you to purchase products online?</p>
                <ul id="poll-answers">
                    <li>
                        <input type="radio" name="vote" class="radio poll_vote" id="vote_1" value="1"/>
                        <span class="label"><label for="vote_1">More convenient shipping and delivery</label></span>
                    </li>
                    <li>
                        <input type="radio" name="vote" class="radio poll_vote" id="vote_2" value="2"/>
                        <span class="label"><label for="vote_2">Lower price</label></span>
                    </li>
                    <li>
                        <input type="radio" name="vote" class="radio poll_vote" id="vote_3" value="3"/>
                        <span class="label"><label for="vote_3">Bigger choice</label></span>
                    </li>
                    <li>
                        <input type="radio" name="vote" class="radio poll_vote" id="vote_4" value="4"/>
                        <span class="label"><label for="vote_4">Centralized product search procedure (without having to
                                leave your home)</label></span>
                    </li>
                    <li>
                        <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5"/>
                        <span class="label"><label for="vote_5">Payments security</label></span>
                    </li>
                    <li>
                        <input type="radio" name="vote" class="radio poll_vote" id="vote_6" value="6"/>
                        <span class="label"><label for="vote_6">30-day Money Back Guarantee</label></span>
                    </li>
                    <li>
                        <input type="radio" name="vote" class="radio poll_vote" id="vote_7" value="7"/>
                        <span class="label"><label for="vote_7">Other.</label></span>
                    </li>
                </ul>
                <script type="text/javascript">decorateList('poll-answers');</script>
                <div class="actions">
                    <button type="submit" title="Vote" class="button"><span><span>Vote</span></span></button>
                </div>
            </div>
        </form>
    </div>
    <div class="paypal-logo">
        <a href="#" title="Additional Options"
           onclick="javascript:window.open('../../https@www.paypal.com/us/cgi-bin/webscr@cmd=xpt-2FMarketing-2Fpopup-2FOLCWhatIsPayPal-outside','paypal','width=600,height=350,left=0,top=0,location=no,status=yes,scrollbars=yes,resizable=yes'); return false;"><img
                SRC="../../https@www.paypalobjects.com/en_US/i/bnr/bnr_nowAccepting_150x60.gif" alt="Additional Options"
                title="Additional Options"/></a>
    </div>
</div>