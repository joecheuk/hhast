<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<317dd19d3c94b07c2a47066e996e1a06>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

final class EmbeddedMemberSelectionExpression extends EditableSyntax {

  private EditableSyntax $_object;
  private EditableSyntax $_operator;
  private EditableSyntax $_name;

  public function __construct(
    EditableSyntax $object,
    EditableSyntax $operator,
    EditableSyntax $name,
  ) {
    parent::__construct('embedded_member_selection_expression');
    $this->_object = $object;
    $this->_operator = $operator;
    $this->_name = $name;
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $object = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['embedded_member_object'],
      $position,
      $source,
    );
    $position += $object->getWidth();
    $operator = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['embedded_member_operator'],
      $position,
      $source,
    );
    $position += $operator->getWidth();
    $name = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['embedded_member_name'],
      $position,
      $source,
    );
    $position += $name->getWidth();
    return new self($object, $operator, $name);
  }

  <<__Override>>
  public function getChildren(): KeyedTraversable<string, EditableSyntax> {
    yield 'object' => $this->_object;
    yield 'operator' => $this->_operator;
    yield 'name' => $this->_name;
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $object = $this->_object->rewrite($rewriter, $parents);
    $operator = $this->_operator->rewrite($rewriter, $parents);
    $name = $this->_name->rewrite($rewriter, $parents);
    if (
      $object === $this->_object &&
      $operator === $this->_operator &&
      $name === $this->_name
    ) {
      return $this;
    }
    return new self($object, $operator, $name);
  }

  public function getObjectUNTYPED(): EditableSyntax {
    return $this->_object;
  }

  public function withObject(EditableSyntax $value): this {
    if ($value === $this->_object) {
      return $this;
    }
    return new self($value, $this->_operator, $this->_name);
  }

  public function hasObject(): bool {
    return !$this->_object->isMissing();
  }

  /**
   * @returns unknown
   */
  public function getObject(): EditableSyntax {
    return TypeAssert\instance_of(EditableSyntax::class, $this->_object);
  }

  public function getOperatorUNTYPED(): EditableSyntax {
    return $this->_operator;
  }

  public function withOperator(EditableSyntax $value): this {
    if ($value === $this->_operator) {
      return $this;
    }
    return new self($this->_object, $value, $this->_name);
  }

  public function hasOperator(): bool {
    return !$this->_operator->isMissing();
  }

  /**
   * @returns unknown
   */
  public function getOperator(): EditableSyntax {
    return TypeAssert\instance_of(EditableSyntax::class, $this->_operator);
  }

  public function getNameUNTYPED(): EditableSyntax {
    return $this->_name;
  }

  public function withName(EditableSyntax $value): this {
    if ($value === $this->_name) {
      return $this;
    }
    return new self($this->_object, $this->_operator, $value);
  }

  public function hasName(): bool {
    return !$this->_name->isMissing();
  }

  /**
   * @returns unknown
   */
  public function getName(): EditableSyntax {
    return TypeAssert\instance_of(EditableSyntax::class, $this->_name);
  }
}
