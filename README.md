# Discontinuedproduct
Magento 2 extension for discontinued products which keeps seo on high
Basic features

1. This extension will create attribute discontinue and will assign to all attribute sets.
2. By default 0 or no valuse is assigned for new products.
3. If we need to discontinue any product we can go to that product and enable it.
4. Product will be removed from listing and search but can be accessible directly from url so seo would not be effected.

How to install
1. Create Magentomaster and inside it Discontinue1 folder in app/code.
2. Do git clone
3. Run php bin/magento setup upgrade command
4. Flush cache and check in admin

Known issue
1. Attribute value is assigned to those products which are created and updated after plugin install. Because old product can not have this attribute value in table.

2. Temporary solution for this is to save all products using mass option in magento. I will fix it in next update
