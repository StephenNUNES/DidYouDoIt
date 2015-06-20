<?php 

namespace Projects\DidYouDoItBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="task")
 */
class Task
{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer", name="task_id" )
    * @ORM\GeneratedValue(strategy="AUTO")     
    */
   private $task_id;

   /**     
    * @ORM\Column(type="string", length=500)
    */
   private $libelle;

   /**
    * @ORM\Column(type="boolean", options={"default": false})
    */
   private $checked;

   /**     
    * @ORM\ManyToOne(targetEntity="TaskList")
    * @ORM\JoinColumn(name="tasklist_id_fk", referencedColumnName="tasklist_id") 
    */
   private $tasklist;

    /**
     * Get task_id
     *
     * @return integer 
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     * Set task_id
     */
    public function setTaskId($id)
    {
        $this->task_id = $id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Task
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set checked
     *
     * @param boolean $checked
     * @return Task
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;

        return $this;
    }

    /**
     * Get checked
     *
     * @return boolean 
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * Set tasklist
     *
     * @param \Projects\DidYouDoItBundle\Entity\TaskList $tasklist
     * @return Task
     */
    public function setTasklist(\Projects\DidYouDoItBundle\Entity\TaskList $tasklist = null)
    {
        $this->tasklist = $tasklist;

        return $this;
    }

    /**
     * Get tasklist
     *
     * @return \Projects\DidYouDoItBundle\Entity\TaskList 
     */
    public function getTasklist()
    {
        return $this->tasklist;
    }
}
