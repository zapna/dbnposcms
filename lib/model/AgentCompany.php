<?php

class AgentCompany extends BaseAgentCompany
{
    public function __toString(){
        return $this->getName();
    }

    
   public function save(PropelPDO $con = null)
  {
       
      parent::save($con);
     if($this->getCvrNumber()){

    $pcr = new Criteria();
    $pcr->add(AgentProductPeer::AGENT_ID, $this->getId());
    $agentProductCount = AgentProductPeer::doCount($pcr);
    
  if($agentProductCount>0){
      
  }else{
        $c = new Criteria();
        $c->add(ProductPeer::COMMISSION_VALUE, 0,Criteria::GREATER_THAN);
        $productCount = ProductPeer::doCount($c);
       
            
        if($productCount>0){
             $products = ProductPeer::doSelect($c);
          foreach($products as $product) {
              
            $agentp = new AgentProduct();
            $agentp->setAgentId($this->getId());
            $agentp->setProductId($product->getId());
            $agentp->setExtraPaymentsShareValue($product->getCommissionValue());
            $agentp->setIsExtraPaymentsShareValuePc($product->getCommissionValuePercentage());
            $agentp->setExtraPaymentsShareEnable(1);
            $agentp->save();   
              
              
          } 
        
          
        
        }
  
  
  }
  
     }
      return parent::save($con);
  } 
    
    
    
    
    
    public function getAccountManager(){
        return UserPeer::retrieveByPk($this->getAccountManagerId());
    }
    
    public function getReferences()
    { //get the all referecnes to this agent company
    	$c = new Criteria();
    	
    	$c->add(CustomerPeer::REFERRER_ID, $this->id);
    	
    	return CustomerPeer::doSelect($c);
    }
    
    public function getTotalRegistrationFeeEarned()
    {
    	//get registrations with
    	 
    	/*
    	 * select * from 
    	 */
    }
    public function getRegistrationRevenueCommissision()
    {
        
       $c = new Criteria();
       $c->add(TransactionPeer::AGENT_COMPANY_ID,$this->getId());
       $c->add(TransactionPeer::TRANSACTION_STATUS_ID, 3);
       $c->add(TransactionPeer::TRANSACTION_TYPE_ID,3);
       $transactions=TransactionPeer::doSelect($c);       
       $sum=0.00;
       $per=0.00;
       foreach($transactions as $transaction){
        $sum = $sum+ $transaction->getCommissionAmount();
        //$per=($sum*8)/100;
        $per=$sum;
       }

       return number_format($per,2);


       
    }
    public function getRefillRevenueCommissision()
    {

       $c = new Criteria();
       $c->add(TransactionPeer::AGENT_COMPANY_ID,$this->getId());
      $c->addAnd(TransactionPeer::TRANSACTION_TYPE_ID, 1);
       $c->addAnd(TransactionPeer::TRANSACTION_STATUS_ID, 3);
       $transactions=TransactionPeer::doSelect($c);
       //$agent
       //$str=array();

       $sum=0.00;
       $per=0.00;
       foreach($transactions as $transaction){
        $sum = $sum+ $transaction->getCommissionAmount();
        //$per=($sum*10)/100;
        $per=$sum;
       }

       return number_format($per,2);

    }
    public function getRevenueAtShopCommissision()
    {

       $c = new Criteria();
       $c->add(TransactionPeer::AGENT_COMPANY_ID,$this->getId());
       //$c->add(TransactionPeer::DESCRIPTION,  substr($this->getDescription(), 0, 26));
       $transactions=TransactionPeer::doSelect($c);
       $con=new Criteria();
       //$con->add(TransactionPeer::DESCRIPTION);
       $sum=0.00;
       $per=0.00;
       foreach($transactions as $transaction)
       {
           $description=substr($transaction->getDescription(),0 ,26);
           if($description== 'Refill')
           {
              // echo $description;
               $name=substr($transaction->getDescription(),27,-1 );
               // echo $name;
               if($name==$this->getName())
                {                  
                   $sum = $sum+ $transaction->getAmount();
                   $per=($sum*10)/100;
                  
                }              
           }
       }

       return number_format($per,2);

    }
    /*today code */
    public function getRegistrationRevenue()
    {

       $c = new Criteria();
       $c->add(TransactionPeer::AGENT_COMPANY_ID,$this->getId());
       $c->add(TransactionPeer::TRANSACTION_STATUS_ID, 3);
       $c->add(TransactionPeer::TRANSACTION_TYPE_ID,3);
       $transactions=TransactionPeer::doSelect($c);
       $sum=0.00;
       $per=0.00;
       foreach($transactions as $transaction){
        $sum = $sum+ $transaction->getAmount();
        //$per=($sum*8)/100;
       }


  return number_format($sum,2);


    }
    
    public function getRefillRevenue()
    {

       $c = new Criteria();
       $c->add(TransactionPeer::AGENT_COMPANY_ID,$this->getId());
       $c->addAnd(TransactionPeer::TRANSACTION_TYPE_ID, 1);
       $c->addAnd(TransactionPeer::TRANSACTION_STATUS_ID, 3);
       $transactions=TransactionPeer::doSelect($c);
       //$agent
       //$str=array();

       $sum=0.00;
       $per=0.00;
       foreach($transactions as $transaction){
        $sum = $sum+ $transaction->getAmount();
        //$per=($sum*10)/100;
       }

       return number_format($sum,2);

    }
    public function getRevenueAtShop()
    {

       $c = new Criteria();
       $c->add(TransactionPeer::AGENT_COMPANY_ID,$this->getId()); 
        $c->addAnd(TransactionPeer::TRANSACTION_TYPE_ID, 1);
       $c->addAnd(TransactionPeer::TRANSACTION_STATUS_ID, 3);
       $transactions=TransactionPeer::doSelect($c);
       $con=new Criteria();       
       $sum=0.00;
       $per=0.00;
       foreach($transactions as $transaction)
       {
           
                   $sum = $sum+ $transaction->getAmount();
                   //$per=($sum*10)/100;

                
           
       }

      return number_format($sum,2);

    }
    /*****
     * 
     */


    public function getCountryName()
    {
       $cc = new Criteria;
       $cc->add(EnableCountryPeer::ID,$this->getCountryId());
       $country = EnableCountryPeer::doSelectOne($cc);
       return $country->getName();
    }
   
    public function getProvinceName(){
            $provinceName ="";
            $cpr = new Criteria();
            $cpr->add(ProvincePeer::ID,$this->getProvinceId());
            $province = ProvincePeer::doSelectOne($cpr);
              if(ProvincePeer::doCount($cpr)>0) $provinceName = $province->getProvince();
            return $provinceName;
    } 
    public function getNationalityTitle(){
           $nationality_title = ""; 
           $cn = new Criteria();
           $cn->add(NationalityPeer::ID,$this->getNationalityId());
           $nationality = NationalityPeer::doSelectOne($cn);
             if(NationalityPeer::doCount($cn)>0) $nationality_title = $nationality->getTitle();
             return $nationality_title;
    }
 
    
      public function getTopupRevenue()
    {

       $c = new Criteria();
       $c->add(TopupTransactionsPeer::AGENT_COMPANY_ID,$this->getId());
      $c->addAnd(TopupTransactionsPeer::STATUS, 3);
 
       $transactions=TopupTransactionsPeer::doSelect($c);
       //$agent
       //$str=array();

       $sum=0.00;
       $per=0.00;
       foreach($transactions as $transaction){
        $sum = $sum+ $transaction->getProductRegistrationFee();
        //$per=($sum*10)/100;
        $per=$sum;
       }

       return number_format($per,2);

    }
        
      public function getTopupCommission()
    {

       $c = new Criteria();
        $c->add(TopupTransactionsPeer::AGENT_COMPANY_ID,$this->getId());
      $c->addAnd(TopupTransactionsPeer::STATUS, 3);
       $transactions=TopupTransactionsPeer::doSelect($c);
       //$agent
       //$str=array();

       $sum=0.00;
       $per=0.00;
       foreach($transactions as $transaction){
        $sum = $sum+ $transaction->getAgentCommission();
        //$per=($sum*10)/100;
        $per=$sum;
       }

       return number_format($per,2);

    }
     public function getNetBalance()
    {

       
        $per=-($this->getCreditLimit()-$this->getBalance());
       
       return number_format($per,2);

    }
   
}
