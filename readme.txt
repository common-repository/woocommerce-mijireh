=== WooCommerce + Mijireh ===
Contributors: reality66
Donate link: http://www.mijireh.com
Tags: woocommerce, ecommerce, payment gateway, stripe, authorize.net, paypal, credit cards, pci
Requires at least: 3.0.0
Tested up to: 3.3.1
Stable tag: 1.0.5

Accept credit card payments on a fully PCI compliant hosted checkout page that you can design as if you were hosting the code yourself.

== Description ==

Use [Mijireh Checkout](http://www.mijireh.com) with your WooCommerce store for a PCI Compliant way to accept credit card payments with a wide variety of payment gateways: Stripe, Authorize.net, PayPal, eWay, SagePay, Braintree, PayLeap, and more.

= You Need Two Things For Any Ecommerce Store =

**Accept Credit Card Payments:** Mijireh Checkout works with a large and growing list of payment gateways to accept credit card payments. __No need to buy other payment gateway extensions__. 

**PCI Compliant:** If you are accepting credit cards your website must be PCI compliant. Even if you do not store credit card numbers, simply transmitting credit card data from your site to your payment gateway means that you need to comply with Self Assessment Questionnaire C. If your website allows allows FTP access, if it is on any type of shared server or virtual private server, or if your server doesn't require 2 factor authentication your website is not in compliance. For more information about PCI compliance see [What you need to know about PCI compliance](http://www.mijireh.com/docs/what-you-need-to-know-about-pci-compliance/)

= What if your not PCI Compliant? =

If you are not PCI compliant and your website suffers a data security breach you face fines up to $500,00 and risk losing your merchant account. You also risk being placed on the Terminated Merchant File also known as The Match File which means neither you, nor anyone at your business, can apply for a new merchant account for several years.

= How does Mijireh work with WooCommerce? =

After installing this Mijireh plugin, Mijireh Checkout will appear in the WooCommerce settings as an optional Payment Gateway. Simply enter in your Mijireh access key and click the checkbox to enable Mijireh Checkout.

= How do I design my checkout page on Mijireh? =

When you install this Mijireh extension, a private page called Mijireh Secure Checkout will be created. Design this page however you'd like, add images, use a custom page template, or just leave it the way it is. The {{mj-checkout-form}} token will be replaced with the checkout form fields. When you are ready, click the "Slurp This Page" button. With one click your entire page design will be uploaded to the secure Mijireh servers.

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Enter your Mijireh access key in the Mijireh Checkout settings in the WooCommerce Payment Gateway settings
1. Optionally slurp a page design for you checkout page

== Frequently Asked Questions ==

= Where can I find out more about Mijireh? =

Please see our [FAQ](http://www.mijireh.com/faq/)

= Where can I find out more about PCI compliance? =

Please see [What you need to know about PCI compliance](http://www.mijireh.com/docs/what-you-need-to-know-about-pci-compliance/)


== Screenshots ==

1. Page Slurp: Put your design on the secure Mijireh servers with one click.
2. Enable Mijireh Checkout in the WooCommerce Payment Gateway settings and enter your Mijireh Access Key

== Changelog ==

= 1.0.5 =

Fixed problem where WooCommerce coupons could cause an error communicating with Mijireh Checkout

= 1.0.4 =

* Fixed problem where shipping costs were not getting passed to Mijireh Checkout.

= 1.0.3 =

* Integrating updated Mijireh PHP library to improve compatiability across servers running in safe_mode or with open_basedir restrictions
* Improved responsiveness of the Page Slurp experience

= 1.0.2 =

* Install Mijireh Secure Checkout page based on an option in the database rather than installation hook to improve reliability.
* Replace uninstall hook with uninstall file to improve reliability of uninstallation.