````php
first run /wsdl_to_php.php 

fix <soap:address location in `server/wsdl/default.wsdl`
    <service name="EsiaUslService">
        <port name="EsiaUslPort" binding="tns:EsiaUslBinding">
            <soap:address location="http://phptest/server/"/>
        </port>
    </service>
run /client/
    
````