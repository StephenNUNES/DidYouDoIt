<?php 

namespace Projects\DidYouDoItBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity 
 * @ORM\Table(name="tasklist") 
 */
class TaskList
{
   /**     
    * @ORM\Id     
    * @ORM\Column(type="integer", name="tasklist_id")     
    * @ORM\GeneratedValue(strategy="AUTO") 
    */
   private $tasklist_id;
   
   /**     
    * @ORM\Column(type="string", length=100)
    */
   private $name;

    /**
     * Get tasklist_id
     *
     * @return integer 
     */
    public function getTasklistId()
    {
        return $this->tasklist_id;
    }

    /**
     * Set id
     */ 
    public function setTasklistId($id)
    {
        $this->tasklist_id = $id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TaskList
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    public function __toString()
    {
		return $this->name;
	}
}
