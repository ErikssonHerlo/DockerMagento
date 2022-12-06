#  Display the percentage of a discount on product list
To continue the previous lessons, Today, I am going to show everybody the best practice, How to display the percentage of a discount on the product list in Magento 2.

This is the result after we complete this practice.

By default, Magento provides us a feature, that allows setting the special price for each product in the backend. You can use this feature by going to the Catalog → Products → Edit → Advanced Pricing → Special Price

When you set the special price for a product successful, on the storefront will show both the final price and regular price. However, Magento doesn't show the percentage of a discount for that product. So in this practice, we will show the percentage of a discount for each product on the product grid.

Okie, let's go.

Let's complete this practice you need to follow steps by step:

Step 1: Determine the templates to overriding
- Enabling the Template Path Hints for Storefront: Go to the Stores → Settings → Configuration → Advanced → Developer → Debug 
Set the Enabled Template Path Hints for Storefront to "Yes"
- If you don't see the "Developer" section there, you need to set the magento mode to "developer" by running the command line:
php bin/magento deploy:mode:set developer

Magento 2 uses two templates difference to display the product price for both default product and configurable product. So we need to override these templates in the child theme named MaxiCompraTheme.

Step 2: Override the templates phtml
- Copy the file named final_price.phtml in the path vendor\magento\module-configurable-product\view\base\templates\product\price to the path app\design\frontend\MaxiCompra\MaxiCompraTheme\Magento_ConfigurableProduct\templates\product\price

- Copy the file named final_price.phtml in the path vendor\magento\module-catalog\view\base\templates\product\price to the path app\design\frontend\MaxiCompra\MaxiCompraTheme\Magento_Catalog\templates\product\price

Step 3: Add the customization CSS

- Copy the file named styles-m.less in the path vendor\magento\theme-frontend-blank\web\css to the path app\design\frontend\MaxiCompra\MaxiCompraTheme\web\css

- Create the new file named _customization.less in the path app\design\frontend\MaxiCompra\MaxiCompraTheme\web\css\source
@import 'customization/_discount_percent.less';

- Create the new file named _discount_percent.less in the path app\design\frontend\MaxiCompra\MaxiCompraTheme\web\css\source\customization

Step 4: Test and see the results
1. Run the following command lines:
```sh
rm -rf var/view_preprocessed/*
rm -rf pub/static/frontend/MaxiCompra/MaxiCompraTheme/*
bin/magento setup:static-content:deploy --theme MaxiCompra/MaxiCompraTheme -f
bin/magento setup:upgrade
```

> **Note:** There are other themes, but we only changed on the MaxiCompra/MaxiCompraTheme, so we only deploy the static content for this theme, so it is fast.

2. Go to the backend, then set the special price to some products

3. Go to the storefront.

Yeah, it works perfectly.

You can get the source codes of this tutorial on the Github https://github.com/php-cuong/theme-fr...